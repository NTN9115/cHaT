cHaT Project -R
================================================================================

Rebuilding

DataBase
--------------------------------------------------------------------------------

*   TABLE userBasic

    *   userID
    *   userName
    *   userEmail
    *   userPW
    *   signUpDate

*   TABLE userFriends

*   TABLE userChat

DBauth.php
--------------------------------------------------------------------------------

Success:

  200 :Online

Unsuccess:

  405: No such userEmail Or Email:Password doesn't match

  400: UserEmail already used

  403: Token doesn't match man-in-the-middle-attach waring

  402: Error Flag
