
Public Class login

    Private Sub Form1_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        GroupBox2.Visible = False
        GroupBox2.Width = GroupBox1.Width
        GroupBox2.Height = GroupBox1.Height
        GroupBox2.Location = GroupBox1.Location

        If My.Settings.automatic_login = True Then

        End If
    End Sub

    Function AuthUser(ByVal url As String, ByVal Username As String, ByVal Password As String) As Boolean
        Dim response, query As String
        query = String.Format("username={0}&password={1}", System.Web.HttpUtility.UrlEncode(Username), System.Web.HttpUtility.UrlEncode(Password))
        response = GetData(url, Username)
        'If Response.Contains("Correct") Then
        MessageBox.Show(response)
        Return True
    End Function

    Private Sub TextBox2_TextChanged(ByVal sender As System.Object, ByVal e As System.EventArgs)
        TxtUsername.Text = TxtUsername.Text.Replace(" ", "")
        TxtUsername.Select(TxtUsername.Text.Length, 0)
    End Sub


    Private Sub ChkAutoLogin_CheckedChanged(ByVal sender As System.Object, ByVal e As System.EventArgs)
        My.Settings.automatic_login = ChkAutoLogin.CheckState
        MessageBox.Show(ChkAutoLogin.Checked)

    End Sub

    Function ValidateLogin()
        If TxtUsername.TextLength = 0 Or TxtPassword.TextLength = 0 Or TxtUrl.Text = "" Then
            Return False
        Else
            Return True
        End If
    End Function

    Private Sub GroupBox1_Enter(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles GroupBox1.Enter

    End Sub

    Private Sub btnlogin_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btnlogin.Click
        TxtUsername.Text = Trim(TxtUsername.Text)
        TxtPassword.Text = Trim(TxtPassword.Text)
        TxtUrl.Text = Trim(TxtUrl.Text)

        If TxtUrl.Text.Substring(0, 7) <> "http://" Then
            TxtUrl.Text = "http://" & TxtUrl.Text
        End If

        If TxtUrl.Text.Substring(TxtUrl.Text.Length - 1) <> "/" Then
            TxtUrl.Text = TxtUrl.Text & "/"
        End If

        If TxtUsername.TextLength = 0 Then
            MessageBox.Show("enter username")
            Return
        End If
        If TxtPassword.TextLength = 0 Then
            MessageBox.Show("enter password")
            Return
        End If
        If TxtUrl.Text = "" Then
            MessageBox.Show("enter url")
            Return
        End If

        Try
            lblstate.Text = "Connecting to " & TxtUrl.Text & " ..."
            ShowBox(2)
            Application.DoEvents()
            Dim query As String = "page=query&sec=client&ssec=QueryClient&h=login&u=" & TxtUsername.Text & "&p=" & TxtPassword.Text
            MessageBox.Show(GetData(TxtUrl.Text & "index.php?", query).ToString)
            'MessageBox.Show(GetData(TxtUrl.Text & "/index.php?", "page=cron&sec=run&ssec=cron&h=runall").ToString)
            editor.Visible = True
            Me.Visible = False
        Catch ex As Exception
            ShowBox(1)
            MessageBox.Show("login failed" & ex.Message)
        End Try
    End Sub

    Function ShowBox(ByVal box As Integer)
        If box = 1 Then
            GroupBox1.Visible = True
            GroupBox2.Visible = False
        End If
        If box = 2 Then
            GroupBox2.Visible = True
            GroupBox1.Visible = False
        End If
    End Function
End Class
