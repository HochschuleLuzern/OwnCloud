<?php
require_once('./Customizing/global/plugins/Modules/Cloud/CloudHook/SWITCHdrive/classes/class.swdrTree.php');
require_once('./Customizing/global/plugins/Modules/Cloud/CloudHook/SWITCHdrive/classes/class.swdrTreeGUI.php');
/**
 * Class ilSWITCHdriveSettingsGUI
 *
 * @author            Theodor Truffer <tt@studer-raimann.ch>
 * @version           1.0.0
 *
 * @ilCtrl_IsCalledBy ilSWITCHdriveSettingsGUI : ilObjCloudGUI
 * @ingroup           ModulesCloud
 */
class ilSWITCHdriveSettingsGUI extends ilCloudPluginSettingsGUI {

	/**
	 * @var ilPropertyFormGUI
	 */
	protected $form;

    public function initSettingsForm()
    {
        global $ilCtrl, $lng;

        $this->form = new ilPropertyFormGUI();

        // title
        $ti = new ilTextInputGUI($lng->txt("title"), "title");
        $ti->setRequired(true);
        $this->form->addItem($ti);

        // description
        $ta = new ilTextAreaInputGUI($lng->txt("description"), "desc");
        $this->form->addItem($ta);

        // online
        $cb = new ilCheckboxInputGUI($lng->txt("online"), "online");
        $this->form->addItem($cb);

        $folder = new ilTextInputGUI($lng->txt("cld_root_folder"), "root_folder");
        if(!$this->cloud_object->currentUserIsOwner())
        {
            $folder->setDisabled(true);
            $folder->setInfo($lng->txt("cld_only_owner_has_permission_to_change_root_path"));
        }

        $folder->setMaxLength(255);
        $folder->setSize(50);
        $this->form->addItem($folder);

        $this->createPluginSection();
        $this->initPluginSettings();

        $this->form->addCommandButton("updateAndChooseRoot", $this->getPluginObject()->getPluginHookObject()->txt("save_choose_root"));
        $this->form->addCommandButton("updateSettings", $lng->txt("save"));

        $this->form->setTitle($lng->txt("cld_edit_Settings"));
        $this->form->setFormAction($ilCtrl->getFormActionByClass("ilCloudPluginSettingsGUI"));
    }

    public function updateAndChooseRoot(){
        $this->updateSettings();
        $client = $this->getPluginObject()->getSwdrApp()->getSwdrClient();
        if($client->hasConnection()){
            global $tpl;
            $tree = new swdrTree($client);
            $tree_gui = new swdrTreeGUI('tree_expl', 'ilCloudPluginSettingsGUI', 'setRootFolder', $tree);
            ilUtil::sendInfo($this->getPluginObject()->getPluginHookObject()->txt('choose_root'), true);
            $tpl->setContent($tree_gui->getHTML());
        }

    }


    public function setRootFolder(){
        global $ilCtrl;
        $root_path = $_GET['root_path'];
        $this->getPluginObject()->getCloudModulObject()->setRootFolder($root_path);
        $this->getPluginObject()->getCloudModulObject()->update();
        $ilCtrl->redirectByClass('ilCloudPluginSettingsGUI', 'editSettings');
    }


	protected function initPluginSettings() {
        $item = new ilTextInputGUI($this->getPluginObject()->getPluginHookObject()->txt('username'), 'username');
        $item->setRequired(true);
	    $this->form->addItem($item);

        $item = new ilPasswordInputGUI($this->getPluginObject()->getPluginHookObject()->txt('password'), 'password');
        $item->setInfo($this->getPluginObject()->getPluginHookObject()->txt('password_info'));
        $item->setRetype(false);
        $item->setRequired(true);
	    $this->form->addItem($item);

        $item = new ilTextInputGUI($this->getPluginObject()->getPluginHookObject()->txt('proxy'), 'proxy');
	    $this->form->addItem($item);
    }

    protected function getPluginSettingsValues(&$values){
        $values['username'] = $this->getPluginObject()->getUsername();
        $values['password'] = $this->getPluginObject()->getPassword();
        $values['proxy'] = $this->getPluginObject()->getProxy();
    }

    public function updatePluginSettings()
    {
        $this->getPluginObject()->setUsername($this->form->getInput("username"));
        $this->getPluginObject()->setPassword($this->form->getInput("password"));
        $this->getPluginObject()->setProxy($this->form->getInput("proxy"));
        $this->getPluginObject()->doUpdate();

        $client = $this->getPluginObject()->getSwdrApp()->getSwdrClient();
        if(!$client->hasConnection()){
            ilUtil::sendFailure($this->getPluginObject()->getPluginHookObject()->txt('no_connection'), true);
        }
    }

    /**
     * Edit Settings. This commands uses the form class to display an input form.
     */
    function editSettings()
    {
        global $tpl, $ilTabs, $lng;

        $ilTabs->activateTab("settings");

        try
        {
            $this->initSettingsForm();
            $this->getSettingsValues();
            $client = $this->getPluginObject()->getSwdrApp()->getSwdrClient();
            if(!$client->hasConnection()){
                ilUtil::sendFailure($this->getPluginObject()->getPluginHookObject()->txt('no_connection'), true);
            }
            $tpl->setContent($this->form->getHTML());
        } catch (Exception $e)
        {
            ilUtil::sendFailure($e->getMessage());
        }
    }

    /**
	 * @return ilSWITCHdrive
	 */
	public function getPluginObject() {
		return parent::getPluginObject(); // TODO: Change the autogenerated stub
	}
}

?>
