<?php 

/**
 * @author sono
 */
class Access
{

  /**
   * @var boolean
   */
  public static $login = false;
  
  /**
   * Liste der User mit SHA1 encodierterm Passwort
   * @var array
   */
  public static $userList = array
  (
  );
  
  /**
   * Liste der vorhandenen Gruppen + Mitglieder
   * @var array
   */
  public static $groupList = array
  (
  );
  
  /**
   * Liste der vorhandenen Gruppen + Mitglieder
   * @var array
   */
  public static $areaGroups = array
  (
  );
  
  /**
   * Liste der Gruppen welche die geschützte Seite sehen dürfen
   * @var array
   */
  public static $protectedPageGroups = array();

  /**
   * @param string $login
   * @param string $password
   */
  public static function login( $login, $password )
  {
    
    if ( !isset( self::$userList[$login] ) )
      return false;
      
    if ( self::$userList[$login] == sha1($password) )
    {
      $_SESSION['login'] = true;
      $_SESSION['user']  = $login;
      return true;
    }
    else 
    {
      $_SESSION['login'] = null;
    }
    
    return false;
    
  }//end public static function login */
  
  /**
   * @param string $groupName
   */
  public static function loggedIn(  )
  {
    
    return isset( $_SESSION['user'] );

  }//end public static function loggedIn */
  
  /**
   * @param string $groupName
   */
  public static function groupMember( $groupName )
  {
    
    if ( !isset( $_SESSION['user'] ) )
      return false;
    
    if ( !isset( self::$groupList[$groupName] ) )
      return false;
      
    return in_array( $groupName , self::$groupList[$groupName] );

    
  }//end public static function groupMember */
  
  /**
   * @param string $login
   * @param string $password
   */
  public static function startProtection( )
  {
    
    ob_start();
    
  }//end public static function startProtection */
  
  /**
   * @param string $login
   * @param string $password
   */
  public static function endProtection( $groups = array(), $showLogin = false )
  {
    
    if ( !isset( $_SESSION['user'] ) )
    {
      if ( !Access::$login )
        Access::$login = $showLogin;
      
      ob_get_contents();
      ob_end_clean();
      return;
    }
    
    if ( !$groups )
    {
      ob_end_flush();
      return;
    }

    foreach( $groups as $groupName )
    {
      if ( !isset( self::$groupList[$groupName] ) )
        continue;

      if ( in_array( $_SESSION['user'], self::$groupList[$groupName] ) )
      {
        ob_end_flush();
        return;
      }
        
    }
    
    if ( !Access::$login )
      Access::$login = $showLogin;
    
    ob_get_contents();
    ob_end_clean();
    return;
    
  }//end public static function endProtection */
  
  /**
   * @param array $groups Liste der Gruppen welche die Seite sehen dürfen
   */
  public static function protectPage( $groups, $appendGroups = array() )
  {
    
    if ( $appendGroups )
      $groups = array_merge( $groups, $appendGroups );
    
    self::$protectedPageGroups = $groups;
    
    ob_start();
    
  }//end public static function protectPage */
  
  /**
   * @param string $login
   * @param string $password
   */
  public static function displayProtectedPage( )
  {
    
    // prüfen ob die seite gesichert wurde
    if ( !self::$protectedPageGroups )
      return;
    
    self::endProtection( self::$protectedPageGroups, true );
    
  }//end public static function protectPage */
  
}//end class Access
