<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class editor
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Dim resources As System.ComponentModel.ComponentResourceManager = New System.ComponentModel.ComponentResourceManager(GetType(editor))
        Me.MenuStrip1 = New System.Windows.Forms.MenuStrip()
        Me.FileToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.ExitToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.EditToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.SubtitleToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.TimingToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.VideoToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.AudioToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.ViewToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.HelpToolStripMenuItem = New System.Windows.Forms.ToolStripMenuItem()
        Me.StatusStrip1 = New System.Windows.Forms.StatusStrip()
        Me.DataGridView1 = New System.Windows.Forms.DataGridView()
        Me.col1 = New System.Windows.Forms.DataGridViewTextBoxColumn()
        Me.col2 = New System.Windows.Forms.DataGridViewTextBoxColumn()
        Me.col3 = New System.Windows.Forms.DataGridViewTextBoxColumn()
        Me.col4 = New System.Windows.Forms.DataGridViewTextBoxColumn()
        Me.player = New AxWMPLib.AxWindowsMediaPlayer()
        Me.lblsubtitle = New System.Windows.Forms.Label()
        Me.GroupBox1 = New System.Windows.Forms.GroupBox()
        Me.txtto3 = New System.Windows.Forms.NumericUpDown()
        Me.txtto2 = New System.Windows.Forms.NumericUpDown()
        Me.txtto1 = New System.Windows.Forms.NumericUpDown()
        Me.txtto0 = New System.Windows.Forms.NumericUpDown()
        Me.txtfrom3 = New System.Windows.Forms.NumericUpDown()
        Me.txtfrom2 = New System.Windows.Forms.NumericUpDown()
        Me.txtfrom1 = New System.Windows.Forms.NumericUpDown()
        Me.txtfrom0 = New System.Windows.Forms.NumericUpDown()
        Me.Label2 = New System.Windows.Forms.Label()
        Me.Label1 = New System.Windows.Forms.Label()
        Me.txtsubtitle = New System.Windows.Forms.TextBox()
        Me.ToolStrip1 = New System.Windows.Forms.ToolStrip()
        Me.ToolStripButton1 = New System.Windows.Forms.ToolStripButton()
        Me.ToolStripButton2 = New System.Windows.Forms.ToolStripButton()
        Me.ToolStripButton3 = New System.Windows.Forms.ToolStripButton()
        Me.ToolStripButton4 = New System.Windows.Forms.ToolStripButton()
        Me.MenuStrip1.SuspendLayout()
        CType(Me.DataGridView1, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.player, System.ComponentModel.ISupportInitialize).BeginInit()
        Me.GroupBox1.SuspendLayout()
        CType(Me.txtto3, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.txtto2, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.txtto1, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.txtto0, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.txtfrom3, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.txtfrom2, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.txtfrom1, System.ComponentModel.ISupportInitialize).BeginInit()
        CType(Me.txtfrom0, System.ComponentModel.ISupportInitialize).BeginInit()
        Me.ToolStrip1.SuspendLayout()
        Me.SuspendLayout()
        '
        'MenuStrip1
        '
        Me.MenuStrip1.Items.AddRange(New System.Windows.Forms.ToolStripItem() {Me.FileToolStripMenuItem, Me.EditToolStripMenuItem, Me.SubtitleToolStripMenuItem, Me.TimingToolStripMenuItem, Me.VideoToolStripMenuItem, Me.AudioToolStripMenuItem, Me.ViewToolStripMenuItem, Me.HelpToolStripMenuItem})
        Me.MenuStrip1.Location = New System.Drawing.Point(0, 0)
        Me.MenuStrip1.Name = "MenuStrip1"
        Me.MenuStrip1.Size = New System.Drawing.Size(819, 24)
        Me.MenuStrip1.TabIndex = 0
        Me.MenuStrip1.Text = "MenuStrip1"
        '
        'FileToolStripMenuItem
        '
        Me.FileToolStripMenuItem.DropDownItems.AddRange(New System.Windows.Forms.ToolStripItem() {Me.ExitToolStripMenuItem})
        Me.FileToolStripMenuItem.Name = "FileToolStripMenuItem"
        Me.FileToolStripMenuItem.Size = New System.Drawing.Size(37, 20)
        Me.FileToolStripMenuItem.Text = "&File"
        '
        'ExitToolStripMenuItem
        '
        Me.ExitToolStripMenuItem.Name = "ExitToolStripMenuItem"
        Me.ExitToolStripMenuItem.Size = New System.Drawing.Size(92, 22)
        Me.ExitToolStripMenuItem.Text = "Exit"
        '
        'EditToolStripMenuItem
        '
        Me.EditToolStripMenuItem.Name = "EditToolStripMenuItem"
        Me.EditToolStripMenuItem.Size = New System.Drawing.Size(39, 20)
        Me.EditToolStripMenuItem.Text = "&Edit"
        '
        'SubtitleToolStripMenuItem
        '
        Me.SubtitleToolStripMenuItem.Name = "SubtitleToolStripMenuItem"
        Me.SubtitleToolStripMenuItem.Size = New System.Drawing.Size(59, 20)
        Me.SubtitleToolStripMenuItem.Text = "&Subtitle"
        '
        'TimingToolStripMenuItem
        '
        Me.TimingToolStripMenuItem.Name = "TimingToolStripMenuItem"
        Me.TimingToolStripMenuItem.Size = New System.Drawing.Size(57, 20)
        Me.TimingToolStripMenuItem.Text = "&Timing"
        '
        'VideoToolStripMenuItem
        '
        Me.VideoToolStripMenuItem.Name = "VideoToolStripMenuItem"
        Me.VideoToolStripMenuItem.Size = New System.Drawing.Size(49, 20)
        Me.VideoToolStripMenuItem.Text = "&Video"
        '
        'AudioToolStripMenuItem
        '
        Me.AudioToolStripMenuItem.Name = "AudioToolStripMenuItem"
        Me.AudioToolStripMenuItem.Size = New System.Drawing.Size(51, 20)
        Me.AudioToolStripMenuItem.Text = "&Audio"
        '
        'ViewToolStripMenuItem
        '
        Me.ViewToolStripMenuItem.Name = "ViewToolStripMenuItem"
        Me.ViewToolStripMenuItem.Size = New System.Drawing.Size(44, 20)
        Me.ViewToolStripMenuItem.Text = "Vie&w"
        '
        'HelpToolStripMenuItem
        '
        Me.HelpToolStripMenuItem.Name = "HelpToolStripMenuItem"
        Me.HelpToolStripMenuItem.Size = New System.Drawing.Size(44, 20)
        Me.HelpToolStripMenuItem.Text = "&Help"
        '
        'StatusStrip1
        '
        Me.StatusStrip1.Location = New System.Drawing.Point(0, 720)
        Me.StatusStrip1.Name = "StatusStrip1"
        Me.StatusStrip1.Size = New System.Drawing.Size(819, 22)
        Me.StatusStrip1.TabIndex = 1
        Me.StatusStrip1.Text = "StatusStrip1"
        '
        'DataGridView1
        '
        Me.DataGridView1.Anchor = CType((((System.Windows.Forms.AnchorStyles.Top Or System.Windows.Forms.AnchorStyles.Bottom) _
                    Or System.Windows.Forms.AnchorStyles.Left) _
                    Or System.Windows.Forms.AnchorStyles.Right), System.Windows.Forms.AnchorStyles)
        Me.DataGridView1.BackgroundColor = System.Drawing.Color.White
        Me.DataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize
        Me.DataGridView1.Columns.AddRange(New System.Windows.Forms.DataGridViewColumn() {Me.col1, Me.col2, Me.col3, Me.col4})
        Me.DataGridView1.Location = New System.Drawing.Point(0, 329)
        Me.DataGridView1.Name = "DataGridView1"
        Me.DataGridView1.Size = New System.Drawing.Size(819, 287)
        Me.DataGridView1.TabIndex = 3
        '
        'col1
        '
        Me.col1.HeaderText = "#"
        Me.col1.Name = "col1"
        Me.col1.ReadOnly = True
        Me.col1.Width = 50
        '
        'col2
        '
        Me.col2.HeaderText = "Start"
        Me.col2.Name = "col2"
        '
        'col3
        '
        Me.col3.HeaderText = "End"
        Me.col3.Name = "col3"
        '
        'col4
        '
        Me.col4.AutoSizeMode = System.Windows.Forms.DataGridViewAutoSizeColumnMode.Fill
        Me.col4.HeaderText = "Text"
        Me.col4.Name = "col4"
        '
        'player
        '
        Me.player.Anchor = CType(((System.Windows.Forms.AnchorStyles.Top Or System.Windows.Forms.AnchorStyles.Left) _
                    Or System.Windows.Forms.AnchorStyles.Right), System.Windows.Forms.AnchorStyles)
        Me.player.Enabled = True
        Me.player.Location = New System.Drawing.Point(0, 52)
        Me.player.Name = "player"
        Me.player.OcxState = CType(resources.GetObject("player.OcxState"), System.Windows.Forms.AxHost.State)
        Me.player.Size = New System.Drawing.Size(819, 276)
        Me.player.TabIndex = 4
        '
        'lblsubtitle
        '
        Me.lblsubtitle.Location = New System.Drawing.Point(12, 263)
        Me.lblsubtitle.Name = "lblsubtitle"
        Me.lblsubtitle.Size = New System.Drawing.Size(795, 51)
        Me.lblsubtitle.TabIndex = 5
        Me.lblsubtitle.Text = "????????????"
        Me.lblsubtitle.TextAlign = System.Drawing.ContentAlignment.MiddleCenter
        '
        'GroupBox1
        '
        Me.GroupBox1.Controls.Add(Me.txtto3)
        Me.GroupBox1.Controls.Add(Me.txtto2)
        Me.GroupBox1.Controls.Add(Me.txtto1)
        Me.GroupBox1.Controls.Add(Me.txtto0)
        Me.GroupBox1.Controls.Add(Me.txtfrom3)
        Me.GroupBox1.Controls.Add(Me.txtfrom2)
        Me.GroupBox1.Controls.Add(Me.txtfrom1)
        Me.GroupBox1.Controls.Add(Me.txtfrom0)
        Me.GroupBox1.Controls.Add(Me.Label2)
        Me.GroupBox1.Controls.Add(Me.Label1)
        Me.GroupBox1.Controls.Add(Me.txtsubtitle)
        Me.GroupBox1.Location = New System.Drawing.Point(4, 616)
        Me.GroupBox1.Name = "GroupBox1"
        Me.GroupBox1.Size = New System.Drawing.Size(810, 101)
        Me.GroupBox1.TabIndex = 6
        Me.GroupBox1.TabStop = False
        '
        'txtto3
        '
        Me.txtto3.Location = New System.Drawing.Point(99, 74)
        Me.txtto3.Maximum = New Decimal(New Integer() {10000, 0, 0, 0})
        Me.txtto3.Name = "txtto3"
        Me.txtto3.Size = New System.Drawing.Size(37, 20)
        Me.txtto3.TabIndex = 19
        Me.txtto3.Value = New Decimal(New Integer() {111, 0, 0, 0})
        '
        'txtto2
        '
        Me.txtto2.Location = New System.Drawing.Point(68, 74)
        Me.txtto2.Name = "txtto2"
        Me.txtto2.Size = New System.Drawing.Size(32, 20)
        Me.txtto2.TabIndex = 18
        Me.txtto2.Value = New Decimal(New Integer() {11, 0, 0, 0})
        '
        'txtto1
        '
        Me.txtto1.Location = New System.Drawing.Point(37, 74)
        Me.txtto1.Name = "txtto1"
        Me.txtto1.Size = New System.Drawing.Size(32, 20)
        Me.txtto1.TabIndex = 17
        Me.txtto1.Value = New Decimal(New Integer() {11, 0, 0, 0})
        '
        'txtto0
        '
        Me.txtto0.Location = New System.Drawing.Point(6, 74)
        Me.txtto0.Name = "txtto0"
        Me.txtto0.Size = New System.Drawing.Size(32, 20)
        Me.txtto0.TabIndex = 16
        Me.txtto0.Value = New Decimal(New Integer() {11, 0, 0, 0})
        '
        'txtfrom3
        '
        Me.txtfrom3.Location = New System.Drawing.Point(99, 32)
        Me.txtfrom3.Maximum = New Decimal(New Integer() {10000, 0, 0, 0})
        Me.txtfrom3.Name = "txtfrom3"
        Me.txtfrom3.Size = New System.Drawing.Size(37, 20)
        Me.txtfrom3.TabIndex = 15
        Me.txtfrom3.Value = New Decimal(New Integer() {111, 0, 0, 0})
        '
        'txtfrom2
        '
        Me.txtfrom2.Location = New System.Drawing.Point(68, 32)
        Me.txtfrom2.Name = "txtfrom2"
        Me.txtfrom2.Size = New System.Drawing.Size(32, 20)
        Me.txtfrom2.TabIndex = 14
        Me.txtfrom2.Value = New Decimal(New Integer() {11, 0, 0, 0})
        '
        'txtfrom1
        '
        Me.txtfrom1.Location = New System.Drawing.Point(37, 32)
        Me.txtfrom1.Name = "txtfrom1"
        Me.txtfrom1.Size = New System.Drawing.Size(32, 20)
        Me.txtfrom1.TabIndex = 13
        Me.txtfrom1.Value = New Decimal(New Integer() {11, 0, 0, 0})
        '
        'txtfrom0
        '
        Me.txtfrom0.Location = New System.Drawing.Point(6, 32)
        Me.txtfrom0.Name = "txtfrom0"
        Me.txtfrom0.Size = New System.Drawing.Size(32, 20)
        Me.txtfrom0.TabIndex = 12
        Me.txtfrom0.Value = New Decimal(New Integer() {11, 0, 0, 0})
        '
        'Label2
        '
        Me.Label2.AutoSize = True
        Me.Label2.Location = New System.Drawing.Point(3, 56)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(23, 13)
        Me.Label2.TabIndex = 11
        Me.Label2.Text = "To:"
        '
        'Label1
        '
        Me.Label1.AutoSize = True
        Me.Label1.Location = New System.Drawing.Point(3, 14)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(35, 13)
        Me.Label1.TabIndex = 10
        Me.Label1.Text = "From:"
        '
        'txtsubtitle
        '
        Me.txtsubtitle.Location = New System.Drawing.Point(142, 13)
        Me.txtsubtitle.Multiline = True
        Me.txtsubtitle.Name = "txtsubtitle"
        Me.txtsubtitle.Size = New System.Drawing.Size(661, 81)
        Me.txtsubtitle.TabIndex = 7
        '
        'ToolStrip1
        '
        Me.ToolStrip1.Items.AddRange(New System.Windows.Forms.ToolStripItem() {Me.ToolStripButton1, Me.ToolStripButton2, Me.ToolStripButton3, Me.ToolStripButton4})
        Me.ToolStrip1.Location = New System.Drawing.Point(0, 24)
        Me.ToolStrip1.Name = "ToolStrip1"
        Me.ToolStrip1.Size = New System.Drawing.Size(819, 25)
        Me.ToolStrip1.TabIndex = 13
        Me.ToolStrip1.Text = "ToolStrip1"
        '
        'ToolStripButton1
        '
        Me.ToolStripButton1.DisplayStyle = System.Windows.Forms.ToolStripItemDisplayStyle.Image
        Me.ToolStripButton1.Image = CType(resources.GetObject("ToolStripButton1.Image"), System.Drawing.Image)
        Me.ToolStripButton1.ImageTransparentColor = System.Drawing.Color.Magenta
        Me.ToolStripButton1.Name = "ToolStripButton1"
        Me.ToolStripButton1.Size = New System.Drawing.Size(23, 22)
        Me.ToolStripButton1.Text = "ToolStripButton1"
        '
        'ToolStripButton2
        '
        Me.ToolStripButton2.DisplayStyle = System.Windows.Forms.ToolStripItemDisplayStyle.Image
        Me.ToolStripButton2.Image = CType(resources.GetObject("ToolStripButton2.Image"), System.Drawing.Image)
        Me.ToolStripButton2.ImageTransparentColor = System.Drawing.Color.Magenta
        Me.ToolStripButton2.Name = "ToolStripButton2"
        Me.ToolStripButton2.Size = New System.Drawing.Size(23, 22)
        Me.ToolStripButton2.Text = "ToolStripButton2"
        '
        'ToolStripButton3
        '
        Me.ToolStripButton3.DisplayStyle = System.Windows.Forms.ToolStripItemDisplayStyle.Image
        Me.ToolStripButton3.Image = CType(resources.GetObject("ToolStripButton3.Image"), System.Drawing.Image)
        Me.ToolStripButton3.ImageTransparentColor = System.Drawing.Color.Magenta
        Me.ToolStripButton3.Name = "ToolStripButton3"
        Me.ToolStripButton3.Size = New System.Drawing.Size(23, 22)
        Me.ToolStripButton3.Text = "ToolStripButton3"
        '
        'ToolStripButton4
        '
        Me.ToolStripButton4.DisplayStyle = System.Windows.Forms.ToolStripItemDisplayStyle.Image
        Me.ToolStripButton4.Image = CType(resources.GetObject("ToolStripButton4.Image"), System.Drawing.Image)
        Me.ToolStripButton4.ImageTransparentColor = System.Drawing.Color.Magenta
        Me.ToolStripButton4.Name = "ToolStripButton4"
        Me.ToolStripButton4.Size = New System.Drawing.Size(23, 22)
        Me.ToolStripButton4.Text = "ToolStripButton4"
        '
        'editor
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(819, 742)
        Me.Controls.Add(Me.ToolStrip1)
        Me.Controls.Add(Me.GroupBox1)
        Me.Controls.Add(Me.lblsubtitle)
        Me.Controls.Add(Me.player)
        Me.Controls.Add(Me.DataGridView1)
        Me.Controls.Add(Me.StatusStrip1)
        Me.Controls.Add(Me.MenuStrip1)
        Me.MainMenuStrip = Me.MenuStrip1
        Me.Name = "editor"
        Me.Text = "editor"
        Me.MenuStrip1.ResumeLayout(False)
        Me.MenuStrip1.PerformLayout()
        CType(Me.DataGridView1, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.player, System.ComponentModel.ISupportInitialize).EndInit()
        Me.GroupBox1.ResumeLayout(False)
        Me.GroupBox1.PerformLayout()
        CType(Me.txtto3, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.txtto2, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.txtto1, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.txtto0, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.txtfrom3, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.txtfrom2, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.txtfrom1, System.ComponentModel.ISupportInitialize).EndInit()
        CType(Me.txtfrom0, System.ComponentModel.ISupportInitialize).EndInit()
        Me.ToolStrip1.ResumeLayout(False)
        Me.ToolStrip1.PerformLayout()
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub
    Friend WithEvents MenuStrip1 As System.Windows.Forms.MenuStrip
    Friend WithEvents StatusStrip1 As System.Windows.Forms.StatusStrip
    Friend WithEvents FileToolStripMenuItem As System.Windows.Forms.ToolStripMenuItem
    Friend WithEvents EditToolStripMenuItem As System.Windows.Forms.ToolStripMenuItem
    Friend WithEvents SubtitleToolStripMenuItem As System.Windows.Forms.ToolStripMenuItem
    Friend WithEvents TimingToolStripMenuItem As System.Windows.Forms.ToolStripMenuItem
    Friend WithEvents VideoToolStripMenuItem As System.Windows.Forms.ToolStripMenuItem
    Friend WithEvents AudioToolStripMenuItem As System.Windows.Forms.ToolStripMenuItem
    Friend WithEvents ViewToolStripMenuItem As System.Windows.Forms.ToolStripMenuItem
    Friend WithEvents HelpToolStripMenuItem As System.Windows.Forms.ToolStripMenuItem
    Friend WithEvents DataGridView1 As System.Windows.Forms.DataGridView
    Friend WithEvents player As AxWMPLib.AxWindowsMediaPlayer
    Friend WithEvents col1 As System.Windows.Forms.DataGridViewTextBoxColumn
    Friend WithEvents col2 As System.Windows.Forms.DataGridViewTextBoxColumn
    Friend WithEvents col3 As System.Windows.Forms.DataGridViewTextBoxColumn
    Friend WithEvents col4 As System.Windows.Forms.DataGridViewTextBoxColumn
    Friend WithEvents lblsubtitle As System.Windows.Forms.Label
    Friend WithEvents GroupBox1 As System.Windows.Forms.GroupBox
    Friend WithEvents txtsubtitle As System.Windows.Forms.TextBox
    Friend WithEvents Label2 As System.Windows.Forms.Label
    Friend WithEvents Label1 As System.Windows.Forms.Label
    Friend WithEvents txtfrom2 As System.Windows.Forms.NumericUpDown
    Friend WithEvents txtfrom1 As System.Windows.Forms.NumericUpDown
    Friend WithEvents txtfrom0 As System.Windows.Forms.NumericUpDown
    Friend WithEvents ToolStrip1 As System.Windows.Forms.ToolStrip
    Friend WithEvents txtto3 As System.Windows.Forms.NumericUpDown
    Friend WithEvents txtto2 As System.Windows.Forms.NumericUpDown
    Friend WithEvents txtto1 As System.Windows.Forms.NumericUpDown
    Friend WithEvents txtto0 As System.Windows.Forms.NumericUpDown
    Friend WithEvents txtfrom3 As System.Windows.Forms.NumericUpDown
    Friend WithEvents ExitToolStripMenuItem As System.Windows.Forms.ToolStripMenuItem
    Friend WithEvents ToolStripButton1 As System.Windows.Forms.ToolStripButton
    Friend WithEvents ToolStripButton2 As System.Windows.Forms.ToolStripButton
    Friend WithEvents ToolStripButton3 As System.Windows.Forms.ToolStripButton
    Friend WithEvents ToolStripButton4 As System.Windows.Forms.ToolStripButton
End Class
