<?php function analyseContactResult(): ?array {
    $contact_result = array();
    $errors = session('errors');
    if(session('contact-failure')) {
        $contact_result['ok'] = false;
        $contact_result['msg'][] = session('contact-failure');
    } else if($errors && $errors->any()) {
        $contact_result['ok'] = false;
        foreach($errors->all() as $error) {
            $contact_result['msg'][] = $error;
        }
    } else if(session('contact-ok')) {
        $contact_result['ok'] = true;
        $contact_result['msg'] = session('contact-ok');
    } else {
        $contact_result = null;   
    };
    session()->forget('contact-ok');
    session()->forget('errors');
    session()->forget('contact-failure');
    return $contact_result && !empty($contact_result) ? $contact_result : null;
}