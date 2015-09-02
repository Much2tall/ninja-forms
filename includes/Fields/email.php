<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Class NF_Fields_Email
 */
class NF_Fields_Email extends NF_Abstracts_Input
{
    protected $_name = 'email';

    protected $_nicename = 'Email';

    protected $_group = 'standard_fields';

    protected $_type = 'email';

    public function __construct()
    {
        $this->_nicename = __( 'Email', Ninja_Forms::TEXTDOMAIN );

        parent::__construct();

        $settings = Ninja_Forms::config( 'EmailFieldSettings' );

        $this->_settings = array_merge( $this->_settings, $settings );
    }

    public function template()
    {
        // Placeholder output
        ?>
        <input type="<?php echo $this->_type; ?>">
        <?php
    }

    public function validate( $value )
    {
        parent::validate( $value );
    }

}
