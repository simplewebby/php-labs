<?php
//set default value
date_default_timezone_set('EST');

$message = '';

//get value from POST array
$action = filter_input(INPUT_POST, 'action');
if (isset($_POST['action'])) {
    $action =  $_POST['action'];
} else {
    $action =  'start_app';
}
//process
switch ($action) {
    case 'start_app':
        // set default invoice date 1 month prior to current date
        $interval = new DateInterval('P1M');
        $default_date = new DateTime();
        $default_date->sub($interval);
        $invoice_date_s = $default_date->format('n/j/Y');
        // set default due date 2 months after current date
        $interval = new DateInterval('P2M');
        $default_date = new DateTime();
        $default_date->add($interval);
        $due_date_s = $default_date->format('n/j/Y');
        $message = 'Enter two dates and click on the Submit button.';
        break;
    case 'process_data':
        $invoice_date_s = $_POST['invoice_date'];
        $due_date_s = $_POST['due_date'];

        if (empty($invoice_date_s) ||
            empty($due_date_s)) {
            $message = "Please enter two valid dates.";
            break;
        }

        try {
            $invoice_date_o = new DateTime($invoice_date_s);
            $due_date_o = new DateTime($due_date_s);
        } catch (Exception $e) {
            $message = 'Make sure both of your dates are valid please.';
            break;
        }
        // make sure the due date is after the invoice date
        if ($due_date_o < $invoice_date_o) {
            $message = 'The due date must come after the invoice date. Please try again.';
            break;
        }
        // set a format string for all dates
        $format_string = 'F j, Y';
        // format both dates
        $invoice_date_f = $invoice_date_o->format($format_string);
        $due_date_f = $due_date_o->format($format_string);
        // get the current date and time and format it
        $current_date_o = new DateTime();
        $current_date_f = $current_date_o->format($format_string);
        $current_time_f = $current_date_o ->format('g:i:s a');
        // get the amount of time between the current date and the due date
        $time_span = $current_date_o->diff($due_date_o);
        if ($due_date_o < $current_date_o) {
            $due_date_message = $time_span->format(
                'This invoice is %y years, %m months, and %d days overdue.');
        } else {
            $due_date_message = $time_span->format(
                'This invoice is due in %y years, %m months, and %d days.');
        }
        break;
}
include 'date_tester.php';
?>
