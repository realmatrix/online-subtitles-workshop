Imports System.Net
Imports System.Net.WebUtility
Imports System.Text
Imports System.Web

Module Module1

    Function GetData(ByVal url As String, ByVal query As String) As String
        Dim wc As New WebClient()
        wc.Headers.Add("Content-Type", "application/x-www-form-urlencoded")
        Dim Data As String = query
        Dim ResponseBytes() As Byte = wc.UploadData(url, "POST", Encoding.UTF8.GetBytes(Data))
        Dim Response As String = Encoding.UTF8.GetString(ResponseBytes)
        Return Response
    End Function

    Function DecodeXML(ByVal data As String)
        Dim xmlString As String = "<department>" & _
        "<employee name=""ABC"" age=""31"" sex=""male""/>" & _
        "<employee name=""CDE"" age=""40"" sex=""male""/></department>"
        Dim sr As New System.IO.StringReader(xmlString)
        Dim doc As New Xml.XmlDocument
        doc.Load(sr)
        'or just in this case doc.LoadXML(xmlString)
        Dim reader As New Xml.XmlNodeReader(doc)
        While reader.Read()
            Select Case reader.NodeType
                Case Xml.XmlNodeType.Element
                    If reader.Name = "employee" Then
                        MessageBox.Show(reader.GetAttribute("name"))
                    End If
            End Select
        End While
    End Function
End Module
