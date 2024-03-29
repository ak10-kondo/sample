# FIELD GROUP TABLE

## SUMMARY

This module extends the Field Group module and provides a "Table" group format,
which renders the fields it contains in a table. The first column of the table
contains the field labels and the second column contains the rendered fields.

## COMPARISON WITH OTHER MODULES

Field group multiple: this module also offers a "Table" group formatter, but it
was designed to deal with multivalued fields. As such, it renders every value
of multivalued fields in their own table cell. Every row containing value n of
all the fields in the group. This is an awesome way to un-clutter multivalued
fields, but it also means the module requires all fields it contains to have
the same cardinality and that some field types don't work very well. In
contrast, this module will render the field value normally, embedded in a
single table cell. For more information see: <http://drupal.org/node/1480204>

## REQUIREMENTS

 - [Field Group](http://drupal.org/project/field_group)

## INSTALLATION

 - Ensure the module's dependencies are met
 - Install the module by placing it in sites/all/modules and enabling it
 - Profit!

## CONFIGURATION

Go to any "Manage form display" or "Manage display" page where you would like
to add your field group, and create a field group as usual. Now you can choose
"Table" as the group format.

## LABEL VISIBILITY

This option determines how to display the Field group label.

 - Hidden: doesn't print anything
 - Above table: prints the label above the table
 - Table caption: prints _only_ the label as a semantically correct <caption>
   element within the table
 - Below table: prints the label below the table

## DESCRIPTION VISIBILITY

This option determines how to display the Field group description text.

 - Hidden: doesn't print anything
 - Above table: prints the description text above the table
 - Below table: prints the description text below the table

## COLUMN HEADERS

Use "First column header" and "Second column header" to add a table header.

## FIELD LABEL DISPLAYING

The module normally displays the field labels in the first column. But you can
control this behavior for every field in the table by configuring their "label
display". The default "Above" will display the label in the first column of the
table and the module will attempt to hide the label in the second column.
"Inline" and "Hidden" won't display the field label in the first column and the
module won't alter the display of the label in the second column.

In some cases it may be simpler to check the "Always show field label" option.
With this option, the module will attempt to display the field label for _every_
field in the first column. The label display option is ignored, and is best set
to "Hidden" to prevent the label from displaying in the second column as well.

## EMPTY LABEL BEHAVIOUR

This setting determines how the module will deal with the situation of missing
labels, which happens in some cases or depending on your configuration of the
field label display. It can be set to always display the first cell of a row,
even if it will be empty, or you can choose to merge both cells. In that case
the cell will span the full width of the table.

## HISTORY

<http://drupal.org/node/1320780>


## MAINTAINERS

- Benedikt Forchhammer (bforchhammer) - <https://www.drupal.org/u/bforchhammer>
- a.ross - <https://www.drupal.org/u/aross>
- Anton Ivanov (Antonnavi) - <https://www.drupal.org/u/antonnavi>
- charlie-s - <https://www.drupal.org/u/charlie-s>
- webadpro - <https://www.drupal.org/u/webadpro>
