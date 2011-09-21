# Field Types Reference

This collection shows some basic use of the standard form types that come with Symfony2

## Field Annotation Reference Guide

### birthday

    /**
     * @Form\Field("birthday")
     */

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
     * @Form\Field("checkbox", options={label="Example checkbox label", required="false"})
     */

**Options**

* value [string]
* required [bool, default: true]
* label [string]
* read_only [bool, default: false]
* error_bubbling [bool, default: false]

### choice

    /**
     * @Form\Field("choice", options={choices={m="Male",f="Female"}})
     */

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
     * @Form\Field("date")
     */

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

**Options**

### entity

TODO

### file

    /**
     * @Form\Field("file")
     */

**Options**

TODO

### hidden

    /**
     * @Form\Field("hidden")
     */

**Options**

* error_bubbling [bool, default: false]

### integer

    /**
     * @Form\Field("integer")
     */

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

**Options**

* value [string]
* required [bool, default: true]
* label [string]
* read_only [bool, default: false]
* error_bubbling [bool, default: false]

### repeated

    /**
     * @Form\Field("repeated")
     */

**Options**

TODO

### search

    /**
     * @Form\Field("search")
     */

**Options**

TODO

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