<?php

return array(

    'undeployable' 		=> '<strong>Attenzione: </strong> Questo asset è stato marcato come non distribuibile.
                       Se lo stato è cambiato,aggiorna lo stato dell\'asset.',
    'does_not_exist' 	=> 'Questo Asset non esiste.',
    'does_not_exist_or_not_requestable' => 'Nice try. That asset does not exist or is not requestable.',
    'assoc_users'	 	=> 'Questo asset è stato assegnato ad un Utente e non può essere cancellato. Per favore Riassegnalo in magazzino,e dopo riprova a cancellarlo.',

    'create' => array(
        'error'   		=> 'L\'asset non è stato creato, riprova per favore. :(',
        'success' 		=> 'L\'asset è stato creato con successo. :)'
    ),

    'update' => array(
        'error'   			=> 'Il bene non è stato aggiornato, si prega di riprovare',
        'success' 			=> 'Bene aggiornato con successo.',
        'nothing_updated'	=>  'Non è stato selezionato nessun campo, nulla è stato aggiornato.',
    ),

    'restore' => array(
        'error'   		=> 'Il bene non è stato ripristinato, riprova',
        'success' 		=> 'Bene ripristinato con successo.'
    ),

    'deletefile' => array(
        'error'   => 'File non cancellato. Riprova.',
        'success' => 'File cancellato con successo.',
    ),

    'upload' => array(
        'error'   => 'File non caricato/i. Riprova.',
        'success' => 'File caricato/i con successo.',
        'nofiles' => 'You did not select any files for upload, or the file you are trying to upload is too large',
        'invalidfiles' => 'Uno o più file è troppo grande o è un tipo di file non consentito. Tipi di file ammessi sono png, gif, jpg, doc, docx, pdf, txt.',
    ),


    'delete' => array(
        'confirm'   	=> 'Sei sicuro di voler eliminare questo bene?',
        'error'   		=> 'C\'è stato un problema durante la cancellazione del bene. Riprova per favore.',
        'success' 		=> 'Il bene è stato eliminato con successo.'
    ),

    'checkout' => array(
        'error'   		=> 'Il bene non è stato estratto, per favore riprova',
        'success' 		=> 'Il bene è stato estratto con successo.',
        'user_does_not_exist' => 'Questo utente non è valido. Riprova.'
    ),

    'checkin' => array(
        'error'   		=> 'Il bene non è stato registrato, per favore riprova',
        'success' 		=> 'Il bene è stato registrato con successo.',
        'user_does_not_exist' => 'Questo utente non è valido. Riprova.'
    )

);
