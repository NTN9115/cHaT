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

    *   user1ID
    *   user2ID
    *   groupname

*   TABLE userChat

    *   user1ID
    *   user2ID
    *   chatTime
    *   contentType
    *   content
    *   unread

DBauth.php
--------------------------------------------------------------------------------

Success:

  200 :Online

Unsuccess:

  405: No such userEmail Or Email:PassWord doesn't match

  400: UserEmail already used

  403: Token doesn't match man-in-the-middle-attach waring

  402: Error Flag
