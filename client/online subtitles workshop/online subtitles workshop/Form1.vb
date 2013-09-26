Imports System.Net
Imports System.Net.WebUtility
Imports System.Text
Imports System.Web





Public Class Form1

    Private Sub Form1_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load

    End Sub

    Function AuthUser(ByVal AuthenticationPage As String, ByVal Username As String, ByVal Password As String) As Boolean
        Dim wc As New WebClient()
        wc.Headers.Add("Content-Type", "application/x-www-form-urlencoded")
        Dim Data As String = String.Format("username={0}&password={1}", System.Web.HttpUtility.UrlEncode(Username), System.Web.HttpUtility.UrlEncode(Password))
        Dim ResponseBytes() As Byte = wc.UploadData(AuthenticationPage, "POST", Encoding.ASCII.GetBytes(Data))
        Dim Response As String = Encoding.ASCII.GetString(ResponseBytes)
        If Response.Contains("Correct") Then
            Return True
        Else
            Return False
        End If
    End Function


    Private Sub TextBox2_TextChanged(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles TxtUsername.TextChanged
        TxtUsername.Text = TxtUsername.Text.Replace(" ", "")
        TxtUsername.Select(TxtUsername.Text.Length, 0)
    End Sub
End Class
