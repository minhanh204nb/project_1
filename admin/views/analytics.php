<div class="content container-fluid">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <div class="row">
        <div class="col-xl-7 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title">PHÂN TÍCH BÁN HÀNG</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap">
                        <div class="w-md-100 d-flex align-items-center mb-3 flex-wrap flex-md-nowrap">
                            <div>
                                <span>DOANH THU</span>
                                <p class="h3 text-primary me-5">$1000</p>
                            </div>
                            <div>
                                <span>HÓA ĐƠN</span>
                                <p class="h3 text-success me-5">$1000</p>
                            </div>
                            <div>
                                <span>CHI PHÍ</span>
                                <p class="h3 text-danger me-5">$300</p>
                            </div>
                            <div>
                                <span>THU NHẬP</span>
                                <p class="h3 text-dark me-5">$700</p>
                            </div>
                        </div>
                    </div>
                    <div id="sales_chart" style="min-height: 365px;">
                        <div id="apexchartsw5f2825s" class="apexcharts-canvas apexchartsw5f2825s apexcharts-theme-light" style="width: 609px; height: 350px;"><svg id="SvgjsSvg1890" width="609" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                <foreignObject x="0" y="0" width="609" height="350">
                                    <div class="apexcharts-legend apexcharts-align-center position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 175px;">
                                        <div class="apexcharts-legend-series" rel="1" seriesname="Received" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(118, 56, 255) !important; color: rgb(118, 56, 255); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Received" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Poppins, sans-serif;">Received</span></div>
                                        <div class="apexcharts-legend-series" rel="2" seriesname="Pending" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(253, 166, 0) !important; color: rgb(253, 166, 0); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Pending" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Poppins, sans-serif;">Pending</span></div>
                                    </div>
                                    <style type="text/css">
                                        .apexcharts-legend {
                                            display: flex;
                                            overflow: auto;
                                            padding: 0 10px;
                                        }

                                        .apexcharts-legend.position-bottom,
                                        .apexcharts-legend.position-top {
                                            flex-wrap: wrap
                                        }

                                        .apexcharts-legend.position-right,
                                        .apexcharts-legend.position-left {
                                            flex-direction: column;
                                            bottom: 0;
                                        }

                                        .apexcharts-legend.position-bottom.apexcharts-align-left,
                                        .apexcharts-legend.position-top.apexcharts-align-left,
                                        .apexcharts-legend.position-right,
                                        .apexcharts-legend.position-left {
                                            justify-content: flex-start;
                                        }

                                        .apexcharts-legend.position-bottom.apexcharts-align-center,
                                        .apexcharts-legend.position-top.apexcharts-align-center {
                                            justify-content: center;
                                        }

                                        .apexcharts-legend.position-bottom.apexcharts-align-right,
                                        .apexcharts-legend.position-top.apexcharts-align-right {
                                            justify-content: flex-end;
                                        }

                                        .apexcharts-legend-series {
                                            cursor: pointer;
                                            line-height: normal;
                                        }

                                        .apexcharts-legend.position-bottom .apexcharts-legend-series,
                                        .apexcharts-legend.position-top .apexcharts-legend-series {
                                            display: flex;
                                            align-items: center;
                                        }

                                        .apexcharts-legend-text {
                                            position: relative;
                                            font-size: 14px;
                                        }

                                        .apexcharts-legend-text *,
                                        .apexcharts-legend-marker * {
                                            pointer-events: none;
                                        }

                                        .apexcharts-legend-marker {
                                            position: relative;
                                            display: inline-block;
                                            cursor: pointer;
                                            margin-right: 3px;
                                            border-style: solid;
                                        }

                                        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                        .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                            display: inline-block;
                                        }

                                        .apexcharts-legend-series.apexcharts-no-click {
                                            cursor: auto;
                                        }

                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                            display: none !important;
                                        }

                                        .apexcharts-inactive-legend {
                                            opacity: 0.45;
                                        }
                                    </style>
                                </foreignObject>
                                <g id="SvgjsG1892" class="apexcharts-inner apexcharts-graphical" transform="translate(52.359375, 30)">
                                    <defs id="SvgjsDefs1891">
                                        <linearGradient id="SvgjsLinearGradient1897" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop1898" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop id="SvgjsStop1899" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop id="SvgjsStop1900" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMaskw5f2825s">
                                            <rect id="SvgjsRect1902" width="552.640625" height="266.348" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="gridRectMarkerMaskw5f2825s">
                                            <rect id="SvgjsRect1903" width="550.640625" height="268.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <rect id="SvgjsRect1901" width="12.614783653846155" height="264.348" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1897)" class="apexcharts-xcrosshairs" y2="264.348" filter="none" fill-opacity="0.9"></rect>
                                    <g id="SvgjsG1935" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1936" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1938" font-family="Poppins, sans-serif" x="27.33203125" y="293.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;">
                                                <tspan id="SvgjsTspan1939">Jan</tspan>
                                                <title>Jan</title>
                                            </text><text id="SvgjsText1941" font-family="Poppins, sans-serif" x="81.99609375" y="293.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;">
                                                <tspan id="SvgjsTspan1942">Feb</tspan>
                                                <title>Feb</title>
                                            </text><text id="SvgjsText1944" font-family="Poppins, sans-serif" x="136.66015625" y="293.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;">
                                                <tspan id="SvgjsTspan1945">Mar</tspan>
                                                <title>Mar</title>
                                            </text><text id="SvgjsText1947" font-family="Poppins, sans-serif" x="191.32421875" y="293.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;">
                                                <tspan id="SvgjsTspan1948">Apr</tspan>
                                                <title>Apr</title>
                                            </text><text id="SvgjsText1950" font-family="Poppins, sans-serif" x="245.98828125" y="293.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;">
                                                <tspan id="SvgjsTspan1951">May</tspan>
                                                <title>May</title>
                                            </text><text id="SvgjsText1953" font-family="Poppins, sans-serif" x="300.65234375" y="293.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;">
                                                <tspan id="SvgjsTspan1954">Jun</tspan>
                                                <title>Jun</title>
                                            </text><text id="SvgjsText1956" font-family="Poppins, sans-serif" x="355.31640625" y="293.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;">
                                                <tspan id="SvgjsTspan1957">Jul</tspan>
                                                <title>Jul</title>
                                            </text><text id="SvgjsText1959" font-family="Poppins, sans-serif" x="409.98046875" y="293.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;">
                                                <tspan id="SvgjsTspan1960">Aug</tspan>
                                                <title>Aug</title>
                                            </text><text id="SvgjsText1962" font-family="Poppins, sans-serif" x="464.64453125" y="293.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;">
                                                <tspan id="SvgjsTspan1963">Sep</tspan>
                                                <title>Sep</title>
                                            </text><text id="SvgjsText1965" font-family="Poppins, sans-serif" x="519.30859375" y="293.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins, sans-serif;">
                                                <tspan id="SvgjsTspan1966">Oct</tspan>
                                                <title>Oct</title>
                                            </text></g>
                                        <line id="SvgjsLine1967" x1="0" y1="265.348" x2="546.640625" y2="265.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line>
                                    </g>
                                    <g id="SvgjsG1984" class="apexcharts-grid">
                                        <g id="SvgjsG1985" class="apexcharts-gridlines-horizontal">
                                            <line id="SvgjsLine1998" x1="0" y1="0" x2="546.640625" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1999" x1="0" y1="52.869600000000005" x2="546.640625" y2="52.869600000000005" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2000" x1="0" y1="105.73920000000001" x2="546.640625" y2="105.73920000000001" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2001" x1="0" y1="158.60880000000003" x2="546.640625" y2="158.60880000000003" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2002" x1="0" y1="211.47840000000002" x2="546.640625" y2="211.47840000000002" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2003" x1="0" y1="264.348" x2="546.640625" y2="264.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1986" class="apexcharts-gridlines-vertical"></g>
                                        <line id="SvgjsLine1987" x1="0" y1="265.348" x2="0" y2="271.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1988" x1="54.6640625" y1="265.348" x2="54.6640625" y2="271.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1989" x1="109.328125" y1="265.348" x2="109.328125" y2="271.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1990" x1="163.9921875" y1="265.348" x2="163.9921875" y2="271.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1991" x1="218.65625" y1="265.348" x2="218.65625" y2="271.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1992" x1="273.3203125" y1="265.348" x2="273.3203125" y2="271.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1993" x1="327.984375" y1="265.348" x2="327.984375" y2="271.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1994" x1="382.6484375" y1="265.348" x2="382.6484375" y2="271.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1995" x1="437.3125" y1="265.348" x2="437.3125" y2="271.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1996" x1="491.9765625" y1="265.348" x2="491.9765625" y2="271.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1997" x1="546.640625" y1="265.348" x2="546.640625" y2="271.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine2005" x1="0" y1="264.348" x2="546.640625" y2="264.348" stroke="transparent" stroke-dasharray="0"></line>
                                        <line id="SvgjsLine2004" x1="0" y1="1" x2="0" y2="264.348" stroke="transparent" stroke-dasharray="0"></line>
                                    </g>
                                    <g id="SvgjsG1904" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG1905" class="apexcharts-series" rel="1" seriesName="Received" data:realIndex="0">
                                            <path id="SvgjsPath1907" d="M 8.409855769230768 264.348L 8.409855769230768 192.48425591346154Q 13.717247596153847 188.17686408653847 19.024639423076923 192.48425591346154L 19.024639423076923 192.48425591346154L 19.024639423076923 264.348L 19.024639423076923 264.348z" fill="rgba(118,56,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 8.409855769230768 264.348L 8.409855769230768 192.48425591346154Q 13.717247596153847 188.17686408653847 19.024639423076923 192.48425591346154L 19.024639423076923 192.48425591346154L 19.024639423076923 264.348L 19.024639423076923 264.348z" pathFrom="M 8.409855769230768 264.348L 8.409855769230768 264.348L 19.024639423076923 264.348L 19.024639423076923 264.348L 19.024639423076923 264.348L 8.409855769230768 264.348" cy="190.33056" cx="49.45913461538461" j="0" val="70" barHeight="74.01744000000001" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1908" d="M 50.45913461538461 264.348L 50.45913461538461 107.89289591346154Q 55.76652644230769 103.58550408653846 61.07391826923077 107.89289591346154L 61.07391826923077 107.89289591346154L 61.07391826923077 264.348L 61.07391826923077 264.348z" fill="rgba(118,56,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 50.45913461538461 264.348L 50.45913461538461 107.89289591346154Q 55.76652644230769 103.58550408653846 61.07391826923077 107.89289591346154L 61.07391826923077 107.89289591346154L 61.07391826923077 264.348L 61.07391826923077 264.348z" pathFrom="M 50.45913461538461 264.348L 50.45913461538461 264.348L 61.07391826923077 264.348L 61.07391826923077 264.348L 61.07391826923077 264.348L 50.45913461538461 264.348" cy="105.73920000000001" cx="91.50841346153845" j="1" val="150" barHeight="158.6088" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1909" d="M 92.50841346153845 264.348L 92.50841346153845 181.91033591346155Q 97.81580528846153 177.60294408653849 103.12319711538461 181.91033591346155L 103.12319711538461 181.91033591346155L 103.12319711538461 264.348L 103.12319711538461 264.348z" fill="rgba(118,56,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 92.50841346153845 264.348L 92.50841346153845 181.91033591346155Q 97.81580528846153 177.60294408653849 103.12319711538461 181.91033591346155L 103.12319711538461 181.91033591346155L 103.12319711538461 264.348L 103.12319711538461 264.348z" pathFrom="M 92.50841346153845 264.348L 92.50841346153845 264.348L 103.12319711538461 264.348L 103.12319711538461 264.348L 103.12319711538461 264.348L 92.50841346153845 264.348" cy="179.75664" cx="133.5576923076923" j="2" val="80" barHeight="84.59136000000001" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1910" d="M 134.5576923076923 264.348L 134.5576923076923 76.17113591346153Q 139.86508413461536 71.86374408653845 145.17247596153845 76.17113591346153L 145.17247596153845 76.17113591346153L 145.17247596153845 264.348L 145.17247596153845 264.348z" fill="rgba(118,56,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 134.5576923076923 264.348L 134.5576923076923 76.17113591346153Q 139.86508413461536 71.86374408653845 145.17247596153845 76.17113591346153L 145.17247596153845 76.17113591346153L 145.17247596153845 264.348L 145.17247596153845 264.348z" pathFrom="M 134.5576923076923 264.348L 134.5576923076923 264.348L 145.17247596153845 264.348L 145.17247596153845 264.348L 145.17247596153845 264.348L 134.5576923076923 264.348" cy="74.01744" cx="175.60697115384613" j="3" val="180" barHeight="190.33056000000002" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1911" d="M 176.60697115384613 264.348L 176.60697115384613 107.89289591346154Q 181.9143629807692 103.58550408653846 187.2217548076923 107.89289591346154L 187.2217548076923 107.89289591346154L 187.2217548076923 264.348L 187.2217548076923 264.348z" fill="rgba(118,56,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 176.60697115384613 264.348L 176.60697115384613 107.89289591346154Q 181.9143629807692 103.58550408653846 187.2217548076923 107.89289591346154L 187.2217548076923 107.89289591346154L 187.2217548076923 264.348L 187.2217548076923 264.348z" pathFrom="M 176.60697115384613 264.348L 176.60697115384613 264.348L 187.2217548076923 264.348L 187.2217548076923 264.348L 187.2217548076923 264.348L 176.60697115384613 264.348" cy="105.73920000000001" cx="217.65624999999997" j="4" val="150" barHeight="158.6088" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1912" d="M 218.65624999999997 264.348L 218.65624999999997 81.45809591346152Q 223.96364182692304 77.15070408653844 229.27103365384613 81.45809591346152L 229.27103365384613 81.45809591346152L 229.27103365384613 264.348L 229.27103365384613 264.348z" fill="rgba(118,56,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 218.65624999999997 264.348L 218.65624999999997 81.45809591346152Q 223.96364182692304 77.15070408653844 229.27103365384613 81.45809591346152L 229.27103365384613 81.45809591346152L 229.27103365384613 264.348L 229.27103365384613 264.348z" pathFrom="M 218.65624999999997 264.348L 218.65624999999997 264.348L 229.27103365384613 264.348L 229.27103365384613 264.348L 229.27103365384613 264.348L 218.65624999999997 264.348" cy="79.30439999999999" cx="259.7055288461538" j="5" val="175" barHeight="185.04360000000003" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1913" d="M 260.7055288461538 264.348L 260.7055288461538 53.96590391346154Q 266.0129206730769 49.65851208653846 271.32031249999994 53.96590391346154L 271.32031249999994 53.96590391346154L 271.32031249999994 264.348L 271.32031249999994 264.348z" fill="rgba(118,56,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 260.7055288461538 264.348L 260.7055288461538 53.96590391346154Q 266.0129206730769 49.65851208653846 271.32031249999994 53.96590391346154L 271.32031249999994 53.96590391346154L 271.32031249999994 264.348L 271.32031249999994 264.348z" pathFrom="M 260.7055288461538 264.348L 260.7055288461538 264.348L 271.32031249999994 264.348L 271.32031249999994 264.348L 271.32031249999994 264.348L 260.7055288461538 264.348" cy="51.812208" cx="301.7548076923077" j="6" val="201" barHeight="212.53579200000001" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1914" d="M 302.7548076923077 264.348L 302.7548076923077 203.05817591346155Q 308.0621995192308 198.7507840865385 313.3695913461538 203.05817591346155L 313.3695913461538 203.05817591346155L 313.3695913461538 264.348L 313.3695913461538 264.348z" fill="rgba(118,56,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 302.7548076923077 264.348L 302.7548076923077 203.05817591346155Q 308.0621995192308 198.7507840865385 313.3695913461538 203.05817591346155L 313.3695913461538 203.05817591346155L 313.3695913461538 264.348L 313.3695913461538 264.348z" pathFrom="M 302.7548076923077 264.348L 302.7548076923077 264.348L 313.3695913461538 264.348L 313.3695913461538 264.348L 313.3695913461538 264.348L 302.7548076923077 264.348" cy="200.90448" cx="343.80408653846155" j="7" val="60" barHeight="63.44352000000001" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1915" d="M 344.80408653846155 264.348L 344.80408653846155 55.02329591346153Q 350.11147836538464 50.71590408653845 355.4188701923077 55.02329591346153L 355.4188701923077 55.02329591346153L 355.4188701923077 264.348L 355.4188701923077 264.348z" fill="rgba(118,56,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 344.80408653846155 264.348L 344.80408653846155 55.02329591346153Q 350.11147836538464 50.71590408653845 355.4188701923077 55.02329591346153L 355.4188701923077 55.02329591346153L 355.4188701923077 264.348L 355.4188701923077 264.348z" pathFrom="M 344.80408653846155 264.348L 344.80408653846155 264.348L 355.4188701923077 264.348L 355.4188701923077 264.348L 355.4188701923077 264.348L 344.80408653846155 264.348" cy="52.86959999999999" cx="385.8533653846154" j="8" val="200" barHeight="211.47840000000002" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1916" d="M 386.8533653846154 264.348L 386.8533653846154 139.61465591346155Q 392.1607572115385 135.30726408653848 397.46814903846155 139.61465591346155L 397.46814903846155 139.61465591346155L 397.46814903846155 264.348L 397.46814903846155 264.348z" fill="rgba(118,56,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 386.8533653846154 264.348L 386.8533653846154 139.61465591346155Q 392.1607572115385 135.30726408653848 397.46814903846155 139.61465591346155L 397.46814903846155 139.61465591346155L 397.46814903846155 264.348L 397.46814903846155 264.348z" pathFrom="M 386.8533653846154 264.348L 386.8533653846154 264.348L 397.46814903846155 264.348L 397.46814903846155 264.348L 397.46814903846155 264.348L 386.8533653846154 264.348" cy="137.46096" cx="427.9026442307693" j="9" val="120" barHeight="126.88704000000001" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1917" d="M 428.9026442307693 264.348L 428.9026442307693 65.59721591346154Q 434.2100360576924 61.28982408653846 439.5174278846154 65.59721591346154L 439.5174278846154 65.59721591346154L 439.5174278846154 264.348L 439.5174278846154 264.348z" fill="rgba(118,56,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 428.9026442307693 264.348L 428.9026442307693 65.59721591346154Q 434.2100360576924 61.28982408653846 439.5174278846154 65.59721591346154L 439.5174278846154 65.59721591346154L 439.5174278846154 264.348L 439.5174278846154 264.348z" pathFrom="M 428.9026442307693 264.348L 428.9026442307693 264.348L 439.5174278846154 264.348L 439.5174278846154 264.348L 439.5174278846154 264.348L 428.9026442307693 264.348" cy="63.44352000000001" cx="469.95192307692315" j="10" val="190" barHeight="200.90448" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1918" d="M 470.95192307692315 264.348L 470.95192307692315 97.31897591346153Q 476.25931490384625 93.01158408653845 481.5667067307693 97.31897591346153L 481.5667067307693 97.31897591346153L 481.5667067307693 264.348L 481.5667067307693 264.348z" fill="rgba(118,56,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 470.95192307692315 264.348L 470.95192307692315 97.31897591346153Q 476.25931490384625 93.01158408653845 481.5667067307693 97.31897591346153L 481.5667067307693 97.31897591346153L 481.5667067307693 264.348L 481.5667067307693 264.348z" pathFrom="M 470.95192307692315 264.348L 470.95192307692315 264.348L 481.5667067307693 264.348L 481.5667067307693 264.348L 481.5667067307693 264.348L 470.95192307692315 264.348" cy="95.16528" cx="512.001201923077" j="11" val="160" barHeight="169.18272000000002" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1919" d="M 513.001201923077 264.348L 513.001201923077 213.63209591346157Q 518.3085937500001 209.3247040865385 523.6159855769232 213.63209591346157L 523.6159855769232 213.63209591346157L 523.6159855769232 264.348L 523.6159855769232 264.348z" fill="rgba(118,56,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 513.001201923077 264.348L 513.001201923077 213.63209591346157Q 518.3085937500001 209.3247040865385 523.6159855769232 213.63209591346157L 523.6159855769232 213.63209591346157L 523.6159855769232 264.348L 523.6159855769232 264.348z" pathFrom="M 513.001201923077 264.348L 513.001201923077 264.348L 523.6159855769232 264.348L 523.6159855769232 264.348L 523.6159855769232 264.348L 513.001201923077 264.348" cy="211.47840000000002" cx="554.0504807692308" j="12" val="50" barHeight="52.869600000000005" barWidth="12.614783653846155"></path>
                                        </g>
                                        <g id="SvgjsG1920" class="apexcharts-series" rel="2" seriesName="Pending" data:realIndex="1">
                                            <path id="SvgjsPath1922" d="M 21.024639423076923 264.348L 21.024639423076923 242.18167991346155Q 26.33203125 237.87428808653848 31.63942307692308 242.18167991346155L 31.63942307692308 242.18167991346155L 31.63942307692308 264.348L 31.63942307692308 264.348z" fill="rgba(253,166,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 21.024639423076923 264.348L 21.024639423076923 242.18167991346155Q 26.33203125 237.87428808653848 31.63942307692308 242.18167991346155L 31.63942307692308 242.18167991346155L 31.63942307692308 264.348L 31.63942307692308 264.348z" pathFrom="M 21.024639423076923 264.348L 21.024639423076923 264.348L 31.63942307692308 264.348L 31.63942307692308 264.348L 31.63942307692308 264.348L 21.024639423076923 264.348" cy="240.027984" cx="62.07391826923077" j="0" val="230" barHeight="24.320016000000003" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1923" d="M 63.07391826923077 264.348L 63.07391826923077 222.09123191346157Q 68.38131009615384 217.7838400865385 73.68870192307692 222.09123191346157L 73.68870192307692 222.09123191346157L 73.68870192307692 264.348L 73.68870192307692 264.348z" fill="rgba(253,166,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 63.07391826923077 264.348L 63.07391826923077 222.09123191346157Q 68.38131009615384 217.7838400865385 73.68870192307692 222.09123191346157L 73.68870192307692 222.09123191346157L 73.68870192307692 264.348L 73.68870192307692 264.348z" pathFrom="M 63.07391826923077 264.348L 63.07391826923077 264.348L 73.68870192307692 264.348L 73.68870192307692 264.348L 73.68870192307692 264.348L 63.07391826923077 264.348" cy="219.93753600000002" cx="104.12319711538461" j="1" val="42" barHeight="44.410464000000005" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1924" d="M 105.12319711538461 264.348L 105.12319711538461 229.49297591346155Q 110.4305889423077 225.18558408653848 115.73798076923077 229.49297591346155L 115.73798076923077 229.49297591346155L 115.73798076923077 264.348L 115.73798076923077 264.348z" fill="rgba(253,166,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 105.12319711538461 264.348L 105.12319711538461 229.49297591346155Q 110.4305889423077 225.18558408653848 115.73798076923077 229.49297591346155L 115.73798076923077 229.49297591346155L 115.73798076923077 264.348L 115.73798076923077 264.348z" pathFrom="M 105.12319711538461 264.348L 105.12319711538461 264.348L 115.73798076923077 264.348L 115.73798076923077 264.348L 115.73798076923077 264.348L 105.12319711538461 264.348" cy="227.33928" cx="146.17247596153845" j="2" val="35" barHeight="37.008720000000004" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1925" d="M 147.17247596153845 264.348L 147.17247596153845 237.95211191346155Q 152.47986778846152 233.64472008653848 157.7872596153846 237.95211191346155L 157.7872596153846 237.95211191346155L 157.7872596153846 264.348L 157.7872596153846 264.348z" fill="rgba(253,166,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 147.17247596153845 264.348L 147.17247596153845 237.95211191346155Q 152.47986778846152 233.64472008653848 157.7872596153846 237.95211191346155L 157.7872596153846 237.95211191346155L 157.7872596153846 264.348L 157.7872596153846 264.348z" pathFrom="M 147.17247596153845 264.348L 147.17247596153845 264.348L 157.7872596153846 264.348L 157.7872596153846 264.348L 157.7872596153846 264.348L 147.17247596153845 264.348" cy="235.798416" cx="188.2217548076923" j="3" val="27" barHeight="28.549584000000003" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1926" d="M 189.2217548076923 264.348L 189.2217548076923 221.03383991346155Q 194.52914663461536 216.72644808653848 199.83653846153845 221.03383991346155L 199.83653846153845 221.03383991346155L 199.83653846153845 264.348L 199.83653846153845 264.348z" fill="rgba(253,166,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 189.2217548076923 264.348L 189.2217548076923 221.03383991346155Q 194.52914663461536 216.72644808653848 199.83653846153845 221.03383991346155L 199.83653846153845 221.03383991346155L 199.83653846153845 264.348L 199.83653846153845 264.348z" pathFrom="M 189.2217548076923 264.348L 189.2217548076923 264.348L 199.83653846153845 264.348L 199.83653846153845 264.348L 199.83653846153845 264.348L 189.2217548076923 264.348" cy="218.880144" cx="230.27103365384613" j="4" val="43" barHeight="45.467856000000005" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1927" d="M 231.27103365384613 264.348L 231.27103365384613 243.23907191346154Q 236.5784254807692 238.93168008653848 241.8858173076923 243.23907191346154L 241.8858173076923 243.23907191346154L 241.8858173076923 264.348L 241.8858173076923 264.348z" fill="rgba(253,166,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 231.27103365384613 264.348L 231.27103365384613 243.23907191346154Q 236.5784254807692 238.93168008653848 241.8858173076923 243.23907191346154L 241.8858173076923 243.23907191346154L 241.8858173076923 264.348L 241.8858173076923 264.348z" pathFrom="M 231.27103365384613 264.348L 231.27103365384613 264.348L 241.8858173076923 264.348L 241.8858173076923 264.348L 241.8858173076923 264.348L 231.27103365384613 264.348" cy="241.085376" cx="272.32031249999994" j="5" val="22" barHeight="23.262624000000002" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1928" d="M 273.32031249999994 264.348L 273.32031249999994 248.52603191346157Q 278.62770432692304 244.2186400865385 283.9350961538461 248.52603191346157L 283.9350961538461 248.52603191346157L 283.9350961538461 264.348L 283.9350961538461 264.348z" fill="rgba(253,166,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 273.32031249999994 264.348L 273.32031249999994 248.52603191346157Q 278.62770432692304 244.2186400865385 283.9350961538461 248.52603191346157L 283.9350961538461 248.52603191346157L 283.9350961538461 264.348L 283.9350961538461 264.348z" pathFrom="M 273.32031249999994 264.348L 273.32031249999994 264.348L 283.9350961538461 264.348L 283.9350961538461 264.348L 283.9350961538461 264.348L 273.32031249999994 264.348" cy="246.37233600000002" cx="314.3695913461538" j="6" val="17" barHeight="17.975664000000002" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1929" d="M 315.3695913461538 264.348L 315.3695913461538 233.72254391346155Q 320.6769831730769 229.41515208653848 325.98437499999994 233.72254391346155L 325.98437499999994 233.72254391346155L 325.98437499999994 264.348L 325.98437499999994 264.348z" fill="rgba(253,166,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 315.3695913461538 264.348L 315.3695913461538 233.72254391346155Q 320.6769831730769 229.41515208653848 325.98437499999994 233.72254391346155L 325.98437499999994 233.72254391346155L 325.98437499999994 264.348L 325.98437499999994 264.348z" pathFrom="M 315.3695913461538 264.348L 315.3695913461538 264.348L 325.98437499999994 264.348L 325.98437499999994 264.348L 325.98437499999994 264.348L 315.3695913461538 264.348" cy="231.568848" cx="356.4188701923077" j="7" val="31" barHeight="32.779152" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1930" d="M 357.4188701923077 264.348L 357.4188701923077 243.23907191346154Q 362.7262620192308 238.93168008653848 368.0336538461538 243.23907191346154L 368.0336538461538 243.23907191346154L 368.0336538461538 264.348L 368.0336538461538 264.348z" fill="rgba(253,166,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 357.4188701923077 264.348L 357.4188701923077 243.23907191346154Q 362.7262620192308 238.93168008653848 368.0336538461538 243.23907191346154L 368.0336538461538 243.23907191346154L 368.0336538461538 264.348L 368.0336538461538 264.348z" pathFrom="M 357.4188701923077 264.348L 357.4188701923077 264.348L 368.0336538461538 264.348L 368.0336538461538 264.348L 368.0336538461538 264.348L 357.4188701923077 264.348" cy="241.085376" cx="398.46814903846155" j="8" val="22" barHeight="23.262624000000002" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1931" d="M 399.46814903846155 264.348L 399.46814903846155 243.23907191346154Q 404.77554086538464 238.93168008653848 410.0829326923077 243.23907191346154L 410.0829326923077 243.23907191346154L 410.0829326923077 264.348L 410.0829326923077 264.348z" fill="rgba(253,166,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 399.46814903846155 264.348L 399.46814903846155 243.23907191346154Q 404.77554086538464 238.93168008653848 410.0829326923077 243.23907191346154L 410.0829326923077 243.23907191346154L 410.0829326923077 264.348L 410.0829326923077 264.348z" pathFrom="M 399.46814903846155 264.348L 399.46814903846155 264.348L 410.0829326923077 264.348L 410.0829326923077 264.348L 410.0829326923077 264.348L 399.46814903846155 264.348" cy="241.085376" cx="440.5174278846154" j="9" val="22" barHeight="23.262624000000002" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1932" d="M 441.5174278846154 264.348L 441.5174278846154 253.81299191346156Q 446.8248197115385 249.5056000865385 452.13221153846155 253.81299191346156L 452.13221153846155 253.81299191346156L 452.13221153846155 264.348L 452.13221153846155 264.348z" fill="rgba(253,166,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 441.5174278846154 264.348L 441.5174278846154 253.81299191346156Q 446.8248197115385 249.5056000865385 452.13221153846155 253.81299191346156L 452.13221153846155 253.81299191346156L 452.13221153846155 264.348L 452.13221153846155 264.348z" pathFrom="M 441.5174278846154 264.348L 441.5174278846154 264.348L 452.13221153846155 264.348L 452.13221153846155 264.348L 452.13221153846155 264.348L 441.5174278846154 264.348" cy="251.659296" cx="482.5667067307693" j="10" val="12" barHeight="12.688704000000001" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1933" d="M 483.5667067307693 264.348L 483.5667067307693 249.58342391346156Q 488.8740985576924 245.2760320865385 494.1814903846154 249.58342391346156L 494.1814903846154 249.58342391346156L 494.1814903846154 264.348L 494.1814903846154 264.348z" fill="rgba(253,166,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 483.5667067307693 264.348L 483.5667067307693 249.58342391346156Q 488.8740985576924 245.2760320865385 494.1814903846154 249.58342391346156L 494.1814903846154 249.58342391346156L 494.1814903846154 264.348L 494.1814903846154 264.348z" pathFrom="M 483.5667067307693 264.348L 483.5667067307693 264.348L 494.1814903846154 264.348L 494.1814903846154 264.348L 494.1814903846154 264.348L 483.5667067307693 264.348" cy="247.429728" cx="524.6159855769232" j="11" val="16" barHeight="16.918272" barWidth="12.614783653846155"></path>
                                            <path id="SvgjsPath1934" d="M 525.6159855769232 264.348L 525.6159855769232 181.91033591346155Q 530.9233774038463 177.60294408653849 536.2307692307694 181.91033591346155L 536.2307692307694 181.91033591346155L 536.2307692307694 264.348L 536.2307692307694 264.348z" fill="rgba(253,166,0,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskw5f2825s)" pathTo="M 525.6159855769232 264.348L 525.6159855769232 181.91033591346155Q 530.9233774038463 177.60294408653849 536.2307692307694 181.91033591346155L 536.2307692307694 181.91033591346155L 536.2307692307694 264.348L 536.2307692307694 264.348z" pathFrom="M 525.6159855769232 264.348L 525.6159855769232 264.348L 536.2307692307694 264.348L 536.2307692307694 264.348L 536.2307692307694 264.348L 525.6159855769232 264.348" cy="179.75664" cx="566.665264423077" j="12" val="80" barHeight="84.59136000000001" barWidth="12.614783653846155"></path>
                                        </g>
                                        <g id="SvgjsG1906" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        <g id="SvgjsG1921" class="apexcharts-datalabels" data:realIndex="1"></g>
                                    </g>
                                    <line id="SvgjsLine2006" x1="0" y1="0" x2="546.640625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2007" x1="0" y1="0" x2="546.640625" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG2008" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG2009" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG2010" class="apexcharts-point-annotations"></g>
                                </g>
                                <g id="SvgjsG1968" class="apexcharts-yaxis" rel="0" transform="translate(22.359375, 0)">
                                    <g id="SvgjsG1969" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1970" font-family="Poppins, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins, sans-serif;">
                                            <tspan id="SvgjsTspan1971">250</tspan>
                                        </text><text id="SvgjsText1972" font-family="Poppins, sans-serif" x="20" y="84.3696" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins, sans-serif;">
                                            <tspan id="SvgjsTspan1973">200</tspan>
                                        </text><text id="SvgjsText1974" font-family="Poppins, sans-serif" x="20" y="137.2392" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins, sans-serif;">
                                            <tspan id="SvgjsTspan1975">150</tspan>
                                        </text><text id="SvgjsText1976" font-family="Poppins, sans-serif" x="20" y="190.10880000000003" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins, sans-serif;">
                                            <tspan id="SvgjsTspan1977">100</tspan>
                                        </text><text id="SvgjsText1978" font-family="Poppins, sans-serif" x="20" y="242.97840000000002" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins, sans-serif;">
                                            <tspan id="SvgjsTspan1979">50</tspan>
                                        </text><text id="SvgjsText1980" font-family="Poppins, sans-serif" x="20" y="295.848" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins, sans-serif;">
                                            <tspan id="SvgjsTspan1981">0</tspan>
                                        </text></g>
                                    <g id="SvgjsG1982" class="apexcharts-yaxis-title"><text id="SvgjsText1983" font-family="Poppins, sans-serif" x="27.6015625" y="162.174" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="900" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-title-text " style="font-family: Poppins, sans-serif;" transform="rotate(-90 -13.359375 157.6739959716797)">$ (thousands)</text></g>
                                </g>
                                <g id="SvgjsG1893" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title" style="font-family: Poppins, sans-serif; font-size: 12px;"></div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(118, 56, 255);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Poppins, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(253, 166, 0);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Poppins, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title">PHÂN TÍCH HÓA ĐƠN</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div id="invoice_chart" style="min-height: 350.7px;">
                        <div id="apexchartspv5lw6s1" class="apexcharts-canvas apexchartspv5lw6s1 apexcharts-theme-light" style="width: 415px; height: 350.7px;"><svg id="SvgjsSvg2011" width="415" height="350.70000000000005" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                <g id="SvgjsG2013" class="apexcharts-inner apexcharts-graphical" transform="translate(45.5, 0)">
                                    <defs id="SvgjsDefs2012">
                                        <clipPath id="gridRectMaskpv5lw6s1">
                                            <rect id="SvgjsRect2015" width="332" height="350" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="gridRectMarkerMaskpv5lw6s1">
                                            <rect id="SvgjsRect2016" width="330" height="352" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <filter id="SvgjsFilter2025" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                            <feFlood id="SvgjsFeFlood2026" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood2026Out" in="SourceGraphic"></feFlood>
                                            <feComposite id="SvgjsFeComposite2027" in="SvgjsFeFlood2026Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2027Out"></feComposite>
                                            <feOffset id="SvgjsFeOffset2028" dx="1" dy="1" result="SvgjsFeOffset2028Out" in="SvgjsFeComposite2027Out"></feOffset>
                                            <feGaussianBlur id="SvgjsFeGaussianBlur2029" stdDeviation="1 " result="SvgjsFeGaussianBlur2029Out" in="SvgjsFeOffset2028Out"></feGaussianBlur>
                                            <feMerge id="SvgjsFeMerge2030" result="SvgjsFeMerge2030Out" in="SourceGraphic">
                                                <feMergeNode id="SvgjsFeMergeNode2031" in="SvgjsFeGaussianBlur2029Out"></feMergeNode>
                                                <feMergeNode id="SvgjsFeMergeNode2032" in="[object Arguments]"></feMergeNode>
                                            </feMerge>
                                            <feBlend id="SvgjsFeBlend2033" in="SourceGraphic" in2="SvgjsFeMerge2030Out" mode="normal" result="SvgjsFeBlend2033Out"></feBlend>
                                        </filter>
                                        <filter id="SvgjsFilter2038" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                            <feFlood id="SvgjsFeFlood2039" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood2039Out" in="SourceGraphic"></feFlood>
                                            <feComposite id="SvgjsFeComposite2040" in="SvgjsFeFlood2039Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2040Out"></feComposite>
                                            <feOffset id="SvgjsFeOffset2041" dx="1" dy="1" result="SvgjsFeOffset2041Out" in="SvgjsFeComposite2040Out"></feOffset>
                                            <feGaussianBlur id="SvgjsFeGaussianBlur2042" stdDeviation="1 " result="SvgjsFeGaussianBlur2042Out" in="SvgjsFeOffset2041Out"></feGaussianBlur>
                                            <feMerge id="SvgjsFeMerge2043" result="SvgjsFeMerge2043Out" in="SourceGraphic">
                                                <feMergeNode id="SvgjsFeMergeNode2044" in="SvgjsFeGaussianBlur2042Out"></feMergeNode>
                                                <feMergeNode id="SvgjsFeMergeNode2045" in="[object Arguments]"></feMergeNode>
                                            </feMerge>
                                            <feBlend id="SvgjsFeBlend2046" in="SourceGraphic" in2="SvgjsFeMerge2043Out" mode="normal" result="SvgjsFeBlend2046Out"></feBlend>
                                        </filter>
                                        <filter id="SvgjsFilter2051" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                            <feFlood id="SvgjsFeFlood2052" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood2052Out" in="SourceGraphic"></feFlood>
                                            <feComposite id="SvgjsFeComposite2053" in="SvgjsFeFlood2052Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2053Out"></feComposite>
                                            <feOffset id="SvgjsFeOffset2054" dx="1" dy="1" result="SvgjsFeOffset2054Out" in="SvgjsFeComposite2053Out"></feOffset>
                                            <feGaussianBlur id="SvgjsFeGaussianBlur2055" stdDeviation="1 " result="SvgjsFeGaussianBlur2055Out" in="SvgjsFeOffset2054Out"></feGaussianBlur>
                                            <feMerge id="SvgjsFeMerge2056" result="SvgjsFeMerge2056Out" in="SourceGraphic">
                                                <feMergeNode id="SvgjsFeMergeNode2057" in="SvgjsFeGaussianBlur2055Out"></feMergeNode>
                                                <feMergeNode id="SvgjsFeMergeNode2058" in="[object Arguments]"></feMergeNode>
                                            </feMerge>
                                            <feBlend id="SvgjsFeBlend2059" in="SourceGraphic" in2="SvgjsFeMerge2056Out" mode="normal" result="SvgjsFeBlend2059Out"></feBlend>
                                        </filter>
                                        <filter id="SvgjsFilter2064" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                            <feFlood id="SvgjsFeFlood2065" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood2065Out" in="SourceGraphic"></feFlood>
                                            <feComposite id="SvgjsFeComposite2066" in="SvgjsFeFlood2065Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2066Out"></feComposite>
                                            <feOffset id="SvgjsFeOffset2067" dx="1" dy="1" result="SvgjsFeOffset2067Out" in="SvgjsFeComposite2066Out"></feOffset>
                                            <feGaussianBlur id="SvgjsFeGaussianBlur2068" stdDeviation="1 " result="SvgjsFeGaussianBlur2068Out" in="SvgjsFeOffset2067Out"></feGaussianBlur>
                                            <feMerge id="SvgjsFeMerge2069" result="SvgjsFeMerge2069Out" in="SourceGraphic">
                                                <feMergeNode id="SvgjsFeMergeNode2070" in="SvgjsFeGaussianBlur2068Out"></feMergeNode>
                                                <feMergeNode id="SvgjsFeMergeNode2071" in="[object Arguments]"></feMergeNode>
                                            </feMerge>
                                            <feBlend id="SvgjsFeBlend2072" in="SourceGraphic" in2="SvgjsFeMerge2069Out" mode="normal" result="SvgjsFeBlend2072Out"></feBlend>
                                        </filter>
                                    </defs>
                                    <g id="SvgjsG2017" class="apexcharts-pie">
                                        <g id="SvgjsG2018" transform="translate(0, 0) scale(1)">
                                            <circle id="SvgjsCircle2019" r="106.44146341463416" cx="163" cy="174" fill="transparent"></circle>
                                            <g id="SvgjsG2020" class="apexcharts-slices">
                                                <g id="SvgjsG2021" class="apexcharts-series apexcharts-pie-series" seriesName="Paid" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath2022" d="M 163 10.243902439024367 A 163.75609756097563 163.75609756097563 0 0 1 223.2826401640226 326.25656893301755 L 202.1837161066147 272.96676980646146 A 106.44146341463416 106.44146341463416 0 0 0 163 67.55853658536584 L 163 10.243902439024367 z" fill="rgba(118,56,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="158.4" data:startAngle="0" data:strokeWidth="2" data:value="55" data:pathOrig="M 163 10.243902439024367 A 163.75609756097563 163.75609756097563 0 0 1 223.2826401640226 326.25656893301755 L 202.1837161066147 272.96676980646146 A 106.44146341463416 106.44146341463416 0 0 0 163 67.55853658536584 L 163 10.243902439024367 z" stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG2034" class="apexcharts-series apexcharts-pie-series" seriesName="Unpaid" rel="2" data:realIndex="1">
                                                    <path id="SvgjsPath2035" d="M 223.2826401640226 326.25656893301755 A 163.75609756097563 163.75609756097563 0 0 1 -0.432962308961379 163.71766955805342 L 56.768574499175116 167.31648521273473 A 106.44146341463416 106.44146341463416 0 0 0 202.1837161066147 272.96676980646146 L 223.2826401640226 326.25656893301755 z" fill="rgba(255,115,123,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="115.20000000000002" data:startAngle="158.4" data:strokeWidth="2" data:value="40" data:pathOrig="M 223.2826401640226 326.25656893301755 A 163.75609756097563 163.75609756097563 0 0 1 -0.432962308961379 163.71766955805342 L 56.768574499175116 167.31648521273473 A 106.44146341463416 106.44146341463416 0 0 0 202.1837161066147 272.96676980646146 L 223.2826401640226 326.25656893301755 z" stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG2047" class="apexcharts-series apexcharts-pie-series" seriesName="Overdue" rel="3" data:realIndex="2">
                                                    <path id="SvgjsPath2048" d="M -0.432962308961379 163.71766955805342 A 163.75609756097563 163.75609756097563 0 0 1 84.10989834344119 30.499437809402338 L 111.72143392323677 80.72463457611153 A 106.44146341463416 106.44146341463416 0 0 0 56.768574499175116 167.31648521273473 L -0.432962308961379 163.71766955805342 z" fill="rgba(253,166,0,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="57.60000000000002" data:startAngle="273.6" data:strokeWidth="2" data:value="20" data:pathOrig="M -0.432962308961379 163.71766955805342 A 163.75609756097563 163.75609756097563 0 0 1 84.10989834344119 30.499437809402338 L 111.72143392323677 80.72463457611153 A 106.44146341463416 106.44146341463416 0 0 0 56.768574499175116 167.31648521273473 L -0.432962308961379 163.71766955805342 z" stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG2060" class="apexcharts-series apexcharts-pie-series" seriesName="Draft" rel="4" data:realIndex="3">
                                                    <path id="SvgjsPath2061" d="M 84.10989834344119 30.499437809402338 A 163.75609756097563 163.75609756097563 0 0 1 162.9714191694185 10.24390493317236 L 162.98142246012205 67.55853820656203 A 106.44146341463416 106.44146341463416 0 0 0 111.72143392323677 80.72463457611153 L 84.10989834344119 30.499437809402338 z" fill="rgba(30,193,176,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="28.80000000000001" data:startAngle="331.20000000000005" data:strokeWidth="2" data:value="10" data:pathOrig="M 84.10989834344119 30.499437809402338 A 163.75609756097563 163.75609756097563 0 0 1 162.9714191694185 10.24390493317236 L 162.98142246012205 67.55853820656203 A 106.44146341463416 106.44146341463416 0 0 0 111.72143392323677 80.72463457611153 L 84.10989834344119 30.499437809402338 z" stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG2023" class="apexcharts-datalabels"><text id="SvgjsText2024" font-family="Poppins, sans-serif" x="295.7058096621645" y="148.6850129132669" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter2025)" style="font-family: Poppins, sans-serif;">44.0%</text></g>
                                                <g id="SvgjsG2036" class="apexcharts-datalabels"><text id="SvgjsText2037" font-family="Poppins, sans-serif" x="83.59092922657017" y="283.2972093339647" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter2038)" style="font-family: Poppins, sans-serif;">32.0%</text></g>
                                                <g id="SvgjsG2049" class="apexcharts-datalabels"><text id="SvgjsText2050" font-family="Poppins, sans-serif" x="48.93232693287959" y="101.61045344564847" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter2051)" style="font-family: Poppins, sans-serif;">16.0%</text></g>
                                                <g id="SvgjsG2062" class="apexcharts-datalabels"><text id="SvgjsText2063" font-family="Poppins, sans-serif" x="129.40229952437835" y="43.14559613049889" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter2064)" style="font-family: Poppins, sans-serif;">8.0%</text></g>
                                            </g>
                                        </g>
                                    </g>
                                    <line id="SvgjsLine2073" x1="0" y1="0" x2="326" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2074" x1="0" y1="0" x2="326" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                </g>
                                <g id="SvgjsG2014" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(118, 56, 255);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Poppins, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 115, 123);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Poppins, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(253, 166, 0);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Poppins, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 4;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(30, 193, 176);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Poppins, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center text-muted">
                        <div class="row">
                            <div class="col-4">
                                <div class="mt-4">
                                    <p class="mb-2 text-truncate"><i class="fas fa-circle text-primary me-1"></i>ĐÃ THANH TOÁN</p>
                                    <h5>$2,132</h5>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4">
                                    <p class="mb-2 text-truncate"><i class="fas fa-circle text-success me-1"></i>CHƯA THANH TOÁN</p>
                                    <h5>$1,763</h5>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mt-4">
                                    <p class="mb-2 text-truncate"><i class="fas fa-circle text-danger me-1"></i>ĐÃ HỦY</p>
                                    <h5>$973</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        // Tạo mảng giả định về dữ liệu phim
        // $sql = "SELECT * FROM bill ORDER BY total_price desc limit 5";

        // $movies = pdo_query_one($sql);
        // echo $movies['total_price'];
        // $movies = ['Phim A', 'Phim B', 'Phim C', 'Phim D', 'Phim E'];
        // $revenues = [1000, 1200, 800, 1500, 1000];
        ?>

        <!-- Vẽ biểu đồ hình tròn bằng Chart.js -->
        <!-- <div class="col-xl-5 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title">PHÂN TÍCH TOP 5 PHIM CÓ SỐ VÉ BÁN ĐƯỢC NHIỀU NHẤT</h5>
                        <?php echo $movies['total_price']; ?>
                    </div>
                </div>
                <div class="card-body">
                    <div class="">
                        <canvas id="myPieChart"></canvas>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <script>
            var ctx = document.getElementById('myPieChart').getContext('2d');
            var myPieChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: <?php echo json_encode($movies); ?>,
                    datasets: [{
                        data: <?php echo json_encode($revenues); ?>,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.8)',
                            'rgba(54, 162, 235, 0.8)',
                            'rgba(255, 206, 86, 0.8)',
                            'rgba(75, 192, 192, 0.8)',
                            'rgba(153, 102, 255, 0.8)'
                        ],
                        hoverOffset: 4
                    }]
                }
            });
        </script> -->
    </div>
</div>