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

### csrf

### date

### datetime

### email

### entity

### file

### field

### hidden

### integer

### language

### locale

### money

### number

### password

### percent

### radio

### repeated

### search

### text

### textarea

### time

### timezone

### url

