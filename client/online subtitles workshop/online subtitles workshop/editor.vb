Public Class editor

    Private Sub editor_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load

    End Sub

    Private Sub txtsubtitle_TextChanged(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles txtsubtitle.TextChanged

    End Sub

    Function AddRow(ByVal LineNumber As Integer, ByVal show As String, ByVal hide As String, ByVal text As String)
        ' Add row using the Add subroutine.
        Dim n As Integer = DataGridView1.Rows.Add()
        DataGridView1.Rows.Item(n).Cells(0).Value = LineNumber
        DataGridView1.Rows.Item(n).Cells(1).Value = show
        DataGridView1.Rows.Item(n).Cells(2).Value = hide
        DataGridView1.Rows.Item(n).Cells(3).Value = text
        Return True
    End Function

    Private Sub GroupBox1_Enter(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles GroupBox1.Enter

    End Sub

    Private Sub ExitToolStripMenuItem_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles ExitToolStripMenuItem.Click
        End
    End Sub
End Class