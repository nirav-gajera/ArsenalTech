<% 

'  SendEmail.asp
'  Author: Nazim Lala
    
Function SendEmail(email, msg) 
  On Error Resume Next 
  
  ' If the string is empty, return false
  If ( IsEmpty(email) ) Then
    SendEmail = false
    Exit Function
  ElseIf ( StrComp(email, "") = 0 ) Then
    SendEmail = false
    Exit Function
  End If
  

  Set cdoConfig = CreateObject("CDO.Configuration")  

  With cdoConfig.Fields  
      .Item(cdoSendUsingMethod) = cdoSendUsingPort  
      ' Fill in server name for remote SMTP server and
      ' credentials
      .Item(cdoSMTPServer) = "smtpserver.foo.com"  
      .Item(cdoSMTPAuthenticate) = 1  
      .Item(cdoSendUsername) = "username"  
      .Item(cdoSendPassword) = "password"  
      .Update  
  End With 

  Set cdoMessage = CreateObject("CDO.Message")  

  With cdoMessage 
    'Fill in sender information
    Set .Configuration = cdoConfig 
    .From = "me@myself.com" 
    .To = email 
    .Subject = "Test Email" 
    .TextBody = msg 
    .Send 
  End With 

  Set cdoMessage = Nothing  
  Set cdoConfig = Nothing  
  
  SendEmail = true
  
End Function 


%>


<FORM VERB=POST METHOD="POST"> 
Test page for checking input with possible SQL injection.<br><br>
Email: <INPUT NAME=Email></INPUT><BR>
Message: <INPUT NAME=Message></INPUT><BR>
Sent: <% = SendEmail(Request("Email"),Request("Message")) %><BR> 
<BUTTON TYPE=SUBMIT>Submit</BUTTON> 
</FORM> 