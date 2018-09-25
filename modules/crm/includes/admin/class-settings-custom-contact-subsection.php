<?php
namespace WeDevs\ERP\CRM;

use WeDevs\ERP\Framework\ERP_Settings_Page;

/**
 * Settings class
 */
class CRM_Settings_Custom_Contact_Subsection extends ERP_Settings_Page {

    public $id = 'foo-bar';

    public $form_fields = [];

    public function __construct() {
        $this->form_fields = [
            [
                'title'       => __( 'Subject', 'erp' ),
                'id'          => 'foo_subject', // just to test foo_ works here too
                'type'        => 'text',
                // 'description' => sprintf( __( 'This controls the email subject line. Leave blank to use the default subject: <code>%s</code>.', 'erp' ), $this->subject ),
                'placeholder' => '',
                // 'default'     => $this->subject,
                'desc_tip'    => true
            ],
            [
                'title'       => __( 'Email Heading', 'erp' ),
                'id'          => 'heading',
                'type'        => 'text',
                // 'description' => sprintf( __( 'This controls the main heading contained within the email notification. Leave blank to use the default heading: <code>%s</code>.', 'erp' ), $this->heading ),
                'placeholder' => '',
                // 'default'     => $this->heading,
                'desc_tip'    => true
            ],
            [
                'title'             => __( 'Email Body', 'erp' ),
                'type'              => 'wysiwyg',
                'id'                => 'body',
                // 'description'       => sprintf( __( 'This controls the main heading contained within the email notification. Leave blank to use the default heading: <code>%s</code>.', 'erp' ), $this->heading ),
                'placeholder'       => '',
                'default'           => '',
                'desc_tip'          => true,
                'custom_attributes' => [
                    'rows' => 5,
                    'cols' => 45
                ]
            ],
            // [
            //     'type' => $this->id . '_help_texts'
            // ]
        ];
    }

    public function admin_options() {
        ?>
        <h3>Title in h3</h3>
        <p>description</p>


        <table class="form-table">
            <?php $this->generate_settings_html(); ?>
        </table>
        <?php
    }

    public function get_form_fields() {
        // return apply_filters( 'erp_settings_email_form_fields_' . $this->id, $this->form_fields );
        return $this->form_fields;
    }

    public function generate_settings_html() {
        $settings = $this->get_form_fields();
        $this->output_fields( $settings );
    }

    public function get_option_id() {
        return 'erp_settings_erp-crm_contacts_' . $this->id;
    }
}
