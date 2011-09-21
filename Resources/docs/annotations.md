# Field Types Reference

This collection shows some basic use of the standard form types that come with Symfony2

## Field Annotation Reference Guide

### birthday

    /**
     * @Form\Field("birthday")
     */
    private $dateOfBirth;

**Options**

* widget [string, default: choice]
* input [string, default: datetime, options: string, datetime or array]
* years [integer]
* months [integer]
* days [integer]
* format [integer, default: IntlDateFormatter::MEDIUM]
* pattern [string]
* data_timezone [string, default: system default timezone]
* user_timezone [string, default: system default timezone]

### checkbox

    /**
     * @Form\Field("checkbox", label="Example checkbox label", required="false")
     */
    private $terms;

**Options**

* value [string]
* required [bool, default: true]
* label [string]
* read_only [bool, default: false]
* error_bubbling [bool, default: false]

### choice

    /**
     * @Form\Field("choice", choices={
     *   m="Male",
     *   f="Female"
     * })
     */
    private $gender;

**Options**

* choices [array]
* multiple [bool, default: false]
* expanded [bool, default: false]
* preferred_choices [array]
* required [bool, default: true]
* label [string]
* read_only [bool, default: false]
* error_bubbling [bool, default: false]

### collection

TODO

### country

    /**
     * @Form\Field("country")
     */
    private $country;

**Options**

* multiple [bool, default: false]
* expanded [bool, default: false]
* preferred_choices [array]
* required [bool, default: true]
* label [string]
* read_only [bool, default: false]
* error_bubbling [bool, default: false]

### csrf

TODO

### date

    /**
     * @Form\Field("date", widget="choice", input="datetime")
     */
    private $publishedAt;

**Options**

* widget
* input
* years
* months
* days
* format
* pattern
* data_timezone
* user_timezone


### datetime

    /**
     * @Form\Field("datetime")
     */
    private $created;

**Options**

* date_widget
* time_widget
* input
* years
* months
* days
* format
* pattern
* data_timezone
* user_timezone

### email

    /**
     * @Form\Field("email")
     */
    private $emailAddress;

**Options**

### entity

    /**
     * @Form\Field("entity", class="AcmeHelloBundle:User", property="name")
     */
    private $users;

** Options **

* class
* property
* multiple [bool, default: false]
* expanded [bool, default: false]
* preferred_choices [array]
* required [bool, default: true]
* label [string]
* read_only [bool, default: false]
* error_bubbling [bool, default: false]

### file

    /**
     * @Form\Field("file")
     */
    private $attachment;

**Options**

* required [bool, default: true]
* label [string]
* read_only [bool, default: false]
* error_bubbling [bool, default: false]

### hidden

    /**
     * @Form\Field("hidden")
     */
    private $id;

**Options**

* error_bubbling [bool, default: false]

### integer

    /**
     * @Form\Field("integer")
     */
    private $numOfChildren;

**Options**

* rounding_mode [integer, default: IntegerToLocalizedStringTransformer::ROUND_DOWN]
* required [bool, default: true]
* label [string]
* read_only [bool, default: false]
* error_bubbling [bool, default: false]

### language

    /**
     * @Form\Field("language")
     */
    private $language;

**Options**

* multiple [bool, default: false]
* expanded [bool, default: false]
* preferred_choices [array]
* required [bool, default: true]
* label [string]
* read_only [bool, default: false]
* error_bubbling [bool, default: false]

### locale

    /**
     * @Form\Field("locale")
     */
    private $preferredLocale;

* multiple [bool, default: false]
* expanded [bool, default: false]
* preferred_choices [array]
* required [bool, default: true]
* label [string]
* read_only [bool, default: false]
* error_bubbling [bool, default: false]

**Options**

### money

    /**
     * @Form\Field("money")
     */
    private $value;

**Options**

* currency
* divisor
* precision
* grouping
* required [bool, default: true]
* label [string]
* read_only [bool, default: false]
* error_bubbling [bool, default: false]

### number

    /**
     * @Form\Field("number")
     */
    private $numOfDependents;

**Options**

* rounding_mode
* precision
* grouping
* required [bool, default: true]
* label [string]
* read_only [bool, default: false]
* error_bubbling [bool, default: false]

### password

    /**
     * @Form\Field("password")
     */
    private $password;

**Options**

* always_empty
* max_length
* required [bool, default: true]
* label [string]
* read_only [bool, default: false]
* trim
* error_bubbling [bool, default: false]

### percent

    /**
     * @Form\Field("percent")
     */
    private $score;

**Options**

* type
* required [bool, default: true]
* label [string]
* read_only [bool, default: false]
* error_bubbling [bool, default: false]

### radio

    /**
     * @Form\Field("radio")
     */
    private $selectedGroup;

**Options**

* value [string]
* required [bool, default: true]
* label [string]
* read_only [bool, default: false]
* error_bubbling [bool, default: false]

### repeated

    /**
     * @Form\Field("repeated", options={
     *   type="password",
     *   invalid_message="The password fields must match",
     *   options={
     *     label="Password"
     *   }
     * })
     */
    private $password

**Options**

* type
* options
* first_name
* second_name
* invalid_message
* invalid_message_parameters
* error_bubbling [bool, default: false]

### search

    /**
     * @Form\Field("search")
     */

**Options**

* max_length
* required [bool, default: true]
* label [string]
* read_only [bool, default: false]
* trim
* error_bubbling [bool, default: false]

### text

    /**
     * @Form\Field("text")
     */

* max_length
* required [bool, default: true]
* label [string]
* read_only [bool, default: false]
* trim
* error_bubbling [bool, default: false]

**Options**

### textarea

    /**
     * @Form\Field("textarea")
     */

**Options**

* max_length
* required [bool, default: true]
* label [string]
* read_only [bool, default: false]
* trim
* error_bubbling [bool, default: false]

### time

    /**
     * @Form\Field("time")
     */

**Options**

* widget
* input
* with_seconds
* hours
* minutes
* seconds
* data_timezone
* user_timezone

### timezone

    /**
     * @Form\Field("timezone")
     */

**Options**

* multiple [bool, default: false]
* expanded [bool, default: false]
* preferred_choices [array]
* required [bool, default: true]
* label [string]
* read_only [bool, default: false]
* error_bubbling [bool, default: false]

### url

    /**
     * @Form\Field("url")
     */

**Options**

* default_protocol
* max_length
* required [bool, default: true]
* label [string]
* read_only [bool, default: false]
* trim
* error_bubbling [bool, default: false]