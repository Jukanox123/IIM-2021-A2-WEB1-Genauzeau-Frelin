<svg width="100%" height="100%" style="margin-bottom: -6px;">
    <defs>
        <pattern id="scales" width="30" height="30" patternUnits="userSpaceOnUse" patternTransform="scale(2)">
            <g id="curves">
                <path id="inner" d="M0 0c0,30, 30,30 30,0"/>
                <path id="outer" d="M0 0c0,30, 30,30 30,0"/>
            </g>
            <use x="15" y="15" xlink:href="#curves"/>
            <use x="-15" y="15" xlink:href="#curves"/>
            <use x="0" y="0" xlink:href="#curves"/>
            <use x="15" y="-15" xlink:href="#curves"/>
            <use x="-15" y="-15" xlink:href="#curves"/>
        </pattern>
    </defs>
    <rect width="100%" height="100%" fill="url(#scales)"/>
</svg>