<?php

return [
    'method_updated' => 'Financial Method has been updated',
    'already_reserved' => 'Seat with number :seat is purchased by customer',
    'please_log_in_to_add_to_cart' => 'Please log in to add this route to cart.',
    'please_fill_out_this_field' => 'Please fill out this field',
    'refund_not_allowed' => 'You are not allowed to cancel this ticket',
    'refund_successful' => 'Ticket has been successfully canceled and refunded',
    'refund_modal' => 'Are you sure you want to cancel this ticket? Refund amount will be :amount GEL',
    'fill_phone_and_password_field' => 'Please fill mobile phone and password fields to log in.',
    'current_code_unused' => 'You can\'t generate new code unless current one is used',
    'phone' => 'Phone number format is invalid.',
    'unverified' => 'Your account is not active',
    'password_updated' => 'Password has been successfully updated.',
    'failed_login' => 'Phone number or password is incorrect',
    'token_not_present' => 'Authorization failure',
    'qr_code_invalid' => 'QR code is invalid.',
    'ticket_number_invalid' => 'Ticket number is invalid.',
    'qr_code_already_active' => 'QR code has already been used.',
    'ticket_number_already_active' => 'Ticket number has already been used.',
    'required' => ':attribute field is required',
    'method_not_allowed' => 'You are not allowed to perform this action',
    'log_in' => 'Please log in to perform this action',
    'error_route_departure_date' => 'You can\'t purchase tickets for selected date for this route.',
    'error_route_cancellation' => 'Route cancellation aborted.',
    'successfully_sent_to_review' => 'Request has been successfully sent to review.',
    'successfully_sent_rating' => 'Rating has been successfully applied.',
    'in_order_to_finish_set_password' => 'In order to finish activating your account please set your desired password below.',
    'cannot_edit_financial' => 'You don\'t have permission to edit this financial parameter page.',
    'successfully_added_financial' => 'Financial method has been successfully added.',
    'successfully_updated_financial' => 'Financial method has been successfully updated.',
    'error_updating_financial' => 'Financial method cannot be set. Make sure you have at least 1 active record for this payment method.',
    'successfully_removed_financial' => 'Financial method has been successfully removed.',
    'successfully_activated_financial' => 'Financial method has been successfully activated.',
    'selected_dates_are_busy' => 'This vehicle already has registered route on :date',
    'can_add_more_than' => 'Sorry, but you can\'t add more than :value payout methods',
    'cant_leave_review' => 'Sorry but you can\'t add a review on this route.',
    'financial_method_cant_be_deleted' => 'This financial method cannot be deleted.',
    'partner_program_successfully_created' => 'Partner program has been successfully created.',
    'partner_program_already_active' => 'You\'ve already joined our partners program.',
    'driver_program_successfully_created' => 'Driver program has been successfully created.',
    'driver_program_already_active' => 'You\'ve already joined our drivers program.',
    'image_not_removed' => 'You can\'t delete this image',
    'image_removed' => 'Image has been removed',
    'sms_successfully_sent' => 'SMS has been successfully sent.',
    'recaptcha_verification_failed' => 'Failed to validate ReCAPTCHA. Please try again.',
    'g-recaptcha-response' => ['required' => 'Failed to validate ReCAPTCHA. Please try again.'],
    'support_successfully_sent' => 'Your message has been successfully sent.',
    'verification_failed' => 'Verification failed. Please try again.',
    'successfully_closed_ticket' => 'Ticket has been successfully closed.',
    'email' => 'Email address is invalid',
    'confirmed' => 'Password\'s don\'t match',
    'current_password' => 'Current password is incorrect',
    'financial_doesnt_exist' => 'Financial method with this ID doesn\'t exist.',
    'successfully_added_route' => 'Route has been successfully registered',
    'unique' => ':attribute already exists.',
    'token_failed' => 'Authentication failed',
    'image' => 'Please select an image in jpg or png format',
    'dimensions' => 'Image dimensions are incorrect, width should be between :min_width-:max_width pixels and height :min_height-:max_height pixels',
    'uploaded' => 'Failed to upload file',


    'custom' => [
        'financial_id' => [
            'required' => 'Please add at least one financial payout using the following <a href=":link">link</a>',
            'required_mobile' => 'Please add at least one payout method using the link below',
            'required_mobile_anchor' => 'Add payout method',
        ]
    ],
    'accepted' => ':attribute should be selected.',
    'active_url' => ':attribute should be URL.',
    'after' => ':attribute should be after :date.',
    'after_or_equal' => ':attribute should be equal or after :date.',
    'alpha' => ':attribute should consist of only letters and numbers.',
    'alpha_dash' => ':attribute should consist of only numbers, letters and dashes.',
    'alpha_num' => ':attribute should consist of only numbers.',
    'array' => ':attribute should be an array.',
    'before' => ':attribute should be before :date',
    'before_or_equal' => ':attribute should be before or equal to :date',
    'between' => [
        'numeric' => ':attribute should be between :min and max',
        'file' => ':attribute should be between :min and :max KB.',
        'string' => ':attribute should be between :min and :max characters.',
        'array' => ':attribute should be between :min and :max.',
    ],
    'boolean' => ':attribute should be either set to true, false, 0 or 1.',
    'date' => ':attribute is an invalid date format.',
    'date_format' => ':attribute doesn\'t match :format date format',
    'different' => ':attribute and :other shouldn\'t be equal.',
    'digits' => ':attribute should consist of :digits digits.',
    'digits_between' => ':attribute should consist of digits between :min :max.',
    'distinct' => ':attribute should be unique.',
    'exists' => ':attribute doesn\'t exist.',
    'file' => ':attribute should be a file.',
    'filled' => ':attribute is required.',
    'in' => 'Specified :attribute is incorrect.',
    'in_array' => ':attribute should be in :other.',
    'integer' => ':attribute should be a whole number.',
    'ip' => ':attribute should be an IP address.',
    'ipv4' => ':attribute should be IPv4 address.',
    'ipv6' => ':attribute should be IPv6 address.',
    'json' => ':attribute should be JSON type.',
    'max' => [
        'numeric' => ':attribute should be less than :max.',
        'file' => ':attribute should be less than :max kb.',
        'string' => ':attribute should be less than :max characters.',
        'array' => ':attribute should be less than :max.',
    ],
    'mimes' => ':attribute should be of following type: :values.',
    'mimetypes' => ':attribute should be of following type: :values.',
    'min' => [
        'numeric' => ':attribute should at least be :min.',
        'file' => ':attribute should at least be :min kb.',
        'string' => ':attribute should have at least :min characters.',
        'array' => ':attribute should have at least :min.',
    ],
    'not_in' => 'Specified :attribute is incorrect.',
    'numeric' => ':attribute should be a number.',
    'present' => ':attribute should be present, even if empty.',
    'regex' => ':attribute doesn\'t match format.',
    'required_if' => ':attribute is required if :other is equal to :value.',
    'required_unless' => ':attribute is required, if :values doesn\'t contain :other.',
    'required_with' => ':attribute is required, if :values is specified.',
    'required_with_all' => ':attribute is required, if :values is specified.',
    'required_without' => ':attribute is required, if :values is not specified.',
    'required_without_all' => ':attribute is required if :values is not specified.',
    'same' => ':attribute and :other should be equal.',
    'size' => [
        'numeric' => ':attribute should be equal to :size.',
        'file' => ':attribute should be :size kilobytes.',
        'string' => ':attribute should be :size characters.',
        'array' => ':attribute should have :size elements.',
    ],
    'string' => ':attribute should be a valid text.',
    'timezone' => ':attribute should be a valid timezone.',
    'url' => ':attribute should be a valid URL',
];
