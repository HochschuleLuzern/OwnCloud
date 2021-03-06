<?php
require_once(__DIR__ . "/../vendor/autoload.php");

/**
 * Class ilOwnCloudService
 *
 * @author  Theodor Truffer <tt@studer-raimann.ch>
 */
class ilOwnCloudService extends ilCloudPluginService
{

    public function __construct($service_name, $obj_id)
    {
        parent::__construct($service_name, $obj_id);
    }


    /**
     * @return ownclApp
     */
    public function getApp()
    {
        return $this->getPluginObject()->getOwnCloudApp();
    }


    /**
     * @return ownclClient
     */
    public function getClient()
    {
        return $this->getApp()->getOwnCloudClient();
    }


    /**
     * @return ownclAuth
     */
    public function getAuth()
    {
        return $this->getApp()->getOwnclAuth();
    }


    /**
     * @param string $callback_url
     */
    public function authService($callback_url = "")
    {
        $this->getAuth()->authenticate(htmlspecialchars_decode($callback_url));
    }


    /**
     * @return bool
     */
    public function afterAuthService()
    {
        global $ilCtrl;
        $ilCtrl->setCmd('edit');

        $root_folder = $this->getPluginObject()->getCloudModulObject()->getRootFolder();
        if (!$this->getClient()->folderExists($root_folder)) {
            $this->createFolder($root_folder);
        }

        return $this->getAuth()->afterAuthentication($this->getPluginObject());
    }


    /**
     * @param ilCloudFileTree $file_tree
     * @param string          $parent_folder
     *
     * @throws Exception
     */
    public function addToFileTree(ilCloudFileTree $file_tree, $parent_folder = "/")
    {
        $files = $this->getClient()->listFolder($parent_folder);
        foreach ($files as $k => $item) {
            $size = ($item instanceof ownclFile) ? $size = $item->getSize() : null;
            $is_dir = $item instanceof ownclFolder;
            $file_tree->addNode($item->getFullPath(), $item->getId(), $is_dir, strtotime($item->getDateTimeLastModified()), $size);
        }
    }


    /**
     * @param null            $path
     * @param ilCloudFileTree $file_tree
     */
    public function getFile($path = null, ilCloudFileTree $file_tree = null)
    {
        $this->getClient()->deliverFile($path);
    }


    /**
     * @param                 $file
     * @param                 $name
     * @param string          $path
     * @param ilCloudFileTree $file_tree
     *
     * @return mixed
     */
    public function putFile($file, $name, $path = '', ilCloudFileTree $file_tree = null)
    {
        $path = ilCloudUtil::joinPaths($file_tree->getRootPath(), $path);
        if ($path == '/') {
            $path = '';
        }

        $return = $this->getClient()->uploadFile($path . "/" . $name, $file);

        return $return;
    }


    /**
     * @param null            $path
     * @param ilCloudFileTree $file_tree
     *
     * @return bool
     */
    public function createFolder($path = null, ilCloudFileTree $file_tree = null)
    {
        if ($file_tree instanceof ilCloudFileTree) {
            $path = ilCloudUtil::joinPaths($file_tree->getRootPath(), $path);
        }

        if ($path != '/' && !$this->getClient()->folderExists($path)) {
            $this->getClient()->createFolder($path);
        }

        return true;
    }


    /**
     * @inheritDoc
     */
    public function createFolderById(/*string*/ $id, /*string*/ $folder_name) : string
    {
        $path = $this->idToPath($id, $folder_name);

        $this->createFolder($path);

        return $this->pathToId($path);
    }


    /**
     * @param null            $path
     * @param ilCloudFileTree $file_tree
     *
     * @return bool
     */
    public function deleteItem($path = null, ilCloudFileTree $file_tree = null)
    {
        $path = ilCloudUtil::joinPaths($file_tree->getRootPath(), $path);

        return $this->getClient()->delete($path);
    }


    /**
     * @return ilOwnCloud
     */
    public function getPluginObject()
    {
        return parent::getPluginObject();
    }


    /**
     * @return ilOwnCloudPlugin
     */
    public function getPluginHookObject()
    {
        return parent::getPluginHookObject();
    }


    /**
     * @param string      $id
     * @param string|null $folder_name
     *
     * @return string
     */
    protected function idToPath(string $id, /*?*/ string $folder_name = null) : string
    {
        $path = ilCloudFileTree::getFileTreeFromSession()->getNodeFromId($id)->getPath();

        if (!empty($folder_name)) {
            $path = ilCloudUtil::joinPaths($path, $folder_name);
        }

        return $path;
    }


    /**
     * @param string $path
     *
     * @return string
     */
    protected function pathToId(string $path) : string
    {
        $node = ilCloudFileTree::getFileTreeFromSession()->getNodeFromPath($path);

        if ($node === null) {
            $id = $this->getClient()->pathToId($path);

            $node = ilCloudFileTree::getFileTreeFromSession()->addNode($path, $id, true);
        }

        return $node->getId();
    }
}