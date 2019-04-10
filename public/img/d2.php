<?php

$sides = 2;
$rollTheDice = 'd' . $sides;
if (!isset($_GET['start'])) {
    $rollTheDice = random_int(1, $sides);
}

header('Content-type: image/svg+xml');

echo '<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<!-- Created with Inkscape (http://www.inkscape.org/) -->
<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:xlink="http://www.w3.org/1999/xlink"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   width="180"
   height="180"
   id="svg3291"
   sodipodi:version="0.32"
   inkscape:version="0.46"
   version="1.0"
   sodipodi:docname="d2.svg"
   inkscape:output_extension="org.inkscape.output.svg.inkscape">
  <defs
     id="defs3293">
    <linearGradient
       inkscape:collect="always"
       id="linearGradient3320">
      <stop
         style="stop-color:#999999;stop-opacity:1;"
         offset="0"
         id="stop3322" />
      <stop
         style="stop-color:#dddddd;stop-opacity:1"
         offset="1"
         id="stop3324" />
    </linearGradient>
    <inkscape:perspective
       sodipodi:type="inkscape:persp3d"
       inkscape:vp_x="0 : 526.18109 : 1"
       inkscape:vp_y="0 : 1000 : 0"
       inkscape:vp_z="744.09448 : 526.18109 : 1"
       inkscape:persp3d-origin="372.04724 : 350.78739 : 1"
       id="perspective3299" />
    <linearGradient
       inkscape:collect="always"
       xlink:href="#linearGradient3320"
       id="linearGradient3326"
       x1="235.02112"
       y1="917.18073"
       x2="235.0211"
       y2="744.52795"
       gradientUnits="userSpaceOnUse" />
  </defs>
  <sodipodi:namedview
     id="base"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageopacity="0.0"
     inkscape:pageshadow="2"
     inkscape:zoom="1"
     inkscape:cx="95"
     inkscape:cy="80"
     inkscape:document-units="px"
     inkscape:current-layer="layer1"
     showgrid="false"
     inkscape:window-width="640"
     inkscape:window-height="701"
     inkscape:window-x="642"
     inkscape:window-y="22" />
  <metadata
     id="metadata3296">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     inkscape:label="Livello 1"
     inkscape:groupmode="layer"
     id="layer1">
    <path
       sodipodi:type="arc"
       style="opacity:1;fill:url(#linearGradient3326);fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate"
       id="path3283"
       sodipodi:cx="278.60007"
       sodipodi:cy="844.47278"
       sodipodi:rx="97.580734"
       sodipodi:ry="97.580734"
       d="M 376.1808,844.47278 A 97.580734,97.580734 0 1 1 181.01933,844.47278 A 97.580734,97.580734 0 1 1 376.1808,844.47278 z"
       transform="matrix(0.5507246,0,0,0.5507246,-63.431911,-375.07193)" />
    <text
       id="text3285"
       y="108.226"
       x="87.730659"
       style="font-size:24px;font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;text-align:end;text-anchor:end;fill:#000000;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1;font-family:Helvetica Neue;-inkscape-font-specification:Sans Bold"
       xml:space="preserve"><tspan
         style="font-size:52px;text-align:center;text-anchor:middle"
         y="108.226"
         x="87.730659"
         id="tspan3287"
         sodipodi:role="line">' . $rollTheDice . '</tspan></text>
  </g>
</svg>
';
