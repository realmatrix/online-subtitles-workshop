Imports System.Net
Imports System.Net.WebUtility
Imports System.Text
Imports System.Web
Imports System.IO

Module Module1

    Function GetData(ByVal url As String, ByVal query As String) As String
        'Dim wc As New WebClient()
        'wc.Headers.Add("Content-Type", "application/x-www-form-urlencoded")

        'Dim Data As String = query
        'Dim ResponseBytes() As Byte = wc.UploadData(url, "POST", Encoding.UTF8.GetBytes(Data))
        'Dim Response As String = Encoding.UTF8.GetString(ResponseBytes)
        'Return Response

        ' Create a request using a URL that can receive a post. 
        Dim request As WebRequest = WebRequest.Create(url)
        ' Set the Method property of the request to POST.
        request.Method = "POST"
        ' Create POST data and convert it to a byte array.
        Dim postData As String = query
        Dim byteArray As Byte() = Encoding.UTF8.GetBytes(postData)
        ' Set the ContentType property of the WebRequest.
        request.ContentType = "application/x-www-form-urlencoded"
        ' Set the ContentLength property of the WebRequest.
        request.ContentLength = byteArray.Length
        ' Get the request stream.
        Dim dataStream As Stream = request.GetRequestStream()
        ' Write the data to the request stream.
        dataStream.Write(byteArray, 0, byteArray.Length)
        ' Close the Stream object.
        dataStream.Close()
        ' Get the response.
        Dim response As WebResponse = request.GetResponse()
        ' Display the status.
        Console.WriteLine(CType(response, HttpWebResponse).StatusDescription)
        ' Get the stream containing content returned by the server.
        dataStream = response.GetResponseStream()
        ' Open the stream using a StreamReader for easy access.
        Dim reader As New StreamReader(dataStream)
        ' Read the content.
        Dim responseFromServer As String = reader.ReadToEnd()
        ' Display the content.
        'Console.WriteLine(responseFromServer)
        ' Clean up the streams.
        reader.Close()
        dataStream.Close()
        response.Close()
        Return responseFromServer
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
        Return True
    End Function
End Module
