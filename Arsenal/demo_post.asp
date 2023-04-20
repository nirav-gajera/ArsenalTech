<%
dim fname city
fname=Request.Form("name")
city=Request.Form("city")
response.write("Dear" & fname & ".")
response.write("Hope you live well in " & city & ".")
%>
