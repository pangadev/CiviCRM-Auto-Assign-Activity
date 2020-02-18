function autoadd_civicrm_buildForm($formName, &$form) {
  if ($formName == 'CRM_Activity_Form_Activity' && $form->getAction() == CRM_Core_Action::ADD) {
    $form->setDefaults(array('assignee_contact_id' => $form->_currentUserId));
  }
}
