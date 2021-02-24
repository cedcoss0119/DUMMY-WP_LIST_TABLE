<?php

if ( ! class_exists( 'WP_List_Table' ) ) {
  require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}



class WP_List_Table_Contact extends WP_List_Table
{
  // define data set for WP_List_Table => data 
  var $data = array(
    array(
        'cb'    => '<input type="checkbox" />', // to display the checkbox.
        "id" => "1",
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
        "phone" => "9912548760",
        "time" => "2021/01/21 at 6:25 am",
    ),
    array(
        'cb'    => '<input type="checkbox" />', // to display the checkbox.
        "id" => "2",
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
        "phone" => "9912548760",
        "time" => "2021/01/21 at 6:25 am",
    ),
    array(
        'cb'    => '<input type="checkbox" />', // to display the checkbox.
        "id" => "2",
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
        "phone" => "9912548760",
        "time" => "2021/01/21 at 6:25 am",
    ),
    array(
        'cb'    => '<input type="checkbox" />', // to display the checkbox.
        "id" => "4",
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
        "phone" => "9912548760",
        "time" => "2021/01/21 at 6:25 am",
    ),
    array(
        'cb'    => '<input type="checkbox" />', // to display the checkbox.
        "id" => "5",
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
        "phone" => "9912548760",
        "time" => "2021/01/21 at 6:25 am",
    ),
    array(
        'cb'    => '<input type="checkbox" />', // to display the checkbox.
        "id" => "6",
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
        "phone" => "9912548760",
        "time" => "2021/01/21 at 6:25 am",
    ),array(
        'cb'    => '<input type="checkbox" />', // to display the checkbox.
        "id" => "7",
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
        "phone" => "9912548760",
        "time" => "2021/01/21 at 6:25 am",
    ),
    array(
        'cb'    => '<input type="checkbox" />', // to display the checkbox.
        "id" => "8",
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
        "phone" => "9912548760",
        "time" => "2021/01/21 at 6:25 am",
    ),
      array(
        'cb'    => '<input type="checkbox" />', // to display the checkbox.
        "id" => "9",
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
        "phone" => "9912548760",
        "time" => "2021/01/21 at 6:25 am",
    ),
      array(
        'cb'    => '<input type="checkbox" />', // to display the checkbox.
        "id" => "10",
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
        "phone" => "9912548760",
        "time" => "2021/01/21 at 6:25 am",
    ),
  );


  // Prepare_items data inside method
  public function prepare_items()
  { 
    // With this function we get the data items
    $this->items = $this->data;

    // with this functin we get the column of table 
    $column = $this->get_columns();

    // with this function we can hide the any column that you want 
    $hidden = $this->get_hidden_columns();

    // with this function we make the table sortable
    $sortable = $this->get_sortable_columns();

    $this->_column_headers = array($column, $sortable, $hidden);
  }

  // create a hidden function that we have define in prepare_items function 
  public function get_hidden_columns()
  {
    return array('name');    // It will return column that you have hide column
  }

  // create a sortable function that we have define in prepate_items function 
  public function get_sortable_columns() 
  {
     $sortable_columns = array(
        "name" => array("name", false),
        "email" => array("email", false) 
    ); 
    return $sortable_columns;
  }



  // get_columns
  public function get_columns()
  {
    // Define our column name inside method
    $column = array(
          'cb'    => '<input type="checkbox" />', // to display the checkbox.
          'id' => "ID",
          'name' => "Name",
          'email' => "Email",
          'phone' => 'Phone',
          "time" => 'Time',
      );

    return $column;
  }

  // column_default
  public function column_default($item, $column_name)
  {
    switch ($column_name) {
      case '<input type="checkbox" />':
      case 'id':
      case 'name':
      case 'email':
      case 'phone':
      case 'time':

      // we return the items according to column
        return $item[$column_name]; 
      default:
        return "No Data Found";
    }
  }

}

// create a function and use our parent class inside our functin 
function ContactTableListLayout()
{
  $show_list_table = new WP_List_Table_Contact();

  // calling prepared items from class
  $show_list_table->prepare_items();

  echo "<h1 align='center'>Contact List Data</h1>";
  
  // display the data with display function
  $show_list_table->display();

}

ContactTableListLayout();


?>