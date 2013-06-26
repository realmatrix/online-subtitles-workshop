<!doctype html>

<head>

   <!-- player skin -->
   <link rel="stylesheet" type="text/css" href="apps/flowplayer-5.4.3/skin/minimalist.css">

   <!-- site specific styling -->
   <style type="text/css">
   .flowplayer { width: 100%; }
   </style>

   <!-- flowplayer depends on jQuery 1.7.1+ (for now) -->
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

   <!-- include flowplayer -->
   <script type="text/javascript" src="apps/flowplayer-5.4.3/flowplayer.min.js"></script>

</head>

<body>

   <!-- the player -->
   <div class="flowplayer" data-swf="apps/flowplayer-5.4.3/flowplayer.swf" data-ratio="0.4167">
      <video>
         <source type="video/webm" src="http://stream.flowplayer.org/bauhaus/624x260.webm">
         <source type="video/mp4" src="http://stream.flowplayer.org/bauhaus/624x260.mp4">
         <source type="video/ogv" src="http://stream.flowplayer.org/bauhaus/624x260.ogv">
      </video>
   </div>
<br />
</body>
