<x-app-layout>
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
          <div class="row gy-4">
            <!-- Congratulations card -->
            <div class="col-md-12 col-lg-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-1">Congratulations John! 🎉</h4>
                  <p class="pb-0">Best seller of the month</p>
                  <h4 class="text-primary mb-1">$42.8k</h4>
                  <p class="mb-2 pb-1">78% of target 🚀</p>
                  <a href="javascript:;" class="btn btn-sm btn-primary waves-effect waves-light">View Sales</a>
                </div>
                <img src="{{ asset('assets/img/icons/misc/triangle-light.png') }}" class="scaleX-n1-rtl position-absolute bottom-0 end-0" width="166" alt="triangle background">
                <img src="{{ asset('assets/img/illustrations/trophy.png') }}" class="scaleX-n1-rtl position-absolute bottom-0 end-0 me-4 mb-4 pb-2" width="83" alt="view sales">
              </div>
            </div>
            <!--/ Congratulations card -->

            <!-- Transactions -->
            <div class="col-lg-8">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Transactions</h5>
                    <div class="dropdown">
                      <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical mdi-24px"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                        <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                        <a class="dropdown-item waves-effect" href="javascript:void(0);">Share</a>
                        <a class="dropdown-item waves-effect" href="javascript:void(0);">Update</a>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3"><span class="fw-medium">Total 48.5% growth</span> 😎 this month</p>
                </div>
                <div class="card-body">
                  <div class="row g-3">
                    <div class="col-md-3 col-6">
                      <div class="d-flex align-items-center">
                        <div class="avatar">
                          <div class="avatar-initial bg-primary rounded shadow">
                            <i class="mdi mdi-trending-up mdi-24px"></i>
                          </div>
                        </div>
                        <div class="ms-3">
                          <div class="small mb-1">Sales</div>
                          <h5 class="mb-0">245k</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-6">
                      <div class="d-flex align-items-center">
                        <div class="avatar">
                          <div class="avatar-initial bg-success rounded shadow">
                            <i class="mdi mdi-account-outline mdi-24px"></i>
                          </div>
                        </div>
                        <div class="ms-3">
                          <div class="small mb-1">Customers</div>
                          <h5 class="mb-0">12.5k</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-6">
                      <div class="d-flex align-items-center">
                        <div class="avatar">
                          <div class="avatar-initial bg-warning rounded shadow">
                            <i class="mdi mdi-cellphone-link mdi-24px"></i>
                          </div>
                        </div>
                        <div class="ms-3">
                          <div class="small mb-1">Product</div>
                          <h5 class="mb-0">1.54k</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-6">
                      <div class="d-flex align-items-center">
                        <div class="avatar">
                          <div class="avatar-initial bg-info rounded shadow">
                            <i class="mdi mdi-currency-usd mdi-24px"></i>
                          </div>
                        </div>
                        <div class="ms-3">
                          <div class="small mb-1">Revenue</div>
                          <h5 class="mb-0">$88k</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Transactions -->

            <!-- Weekly Overview Chart -->
            <div class="col-xl-4 col-md-6">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex justify-content-between">
                    <h5 class="mb-1">Weekly Overview</h5>
                    <div class="dropdown">
                      <button class="btn p-0" type="button" id="weeklyOverviewDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical mdi-24px"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklyOverviewDropdown">
                        <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                        <a class="dropdown-item waves-effect" href="javascript:void(0);">Share</a>
                        <a class="dropdown-item waves-effect" href="javascript:void(0);">Update</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body" style="position: relative;">
                  <div id="weeklyOverviewChart" style="min-height: 200px;"><div id="apexchartsqps02lyc" class="apexcharts-canvas apexchartsqps02lyc apexcharts-theme-light" style="width: 381px; height: 200px;"><svg id="SvgjsSvg1183" width="381" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(-16, -9)" style="background: transparent;"><g id="SvgjsG1185" class="apexcharts-inner apexcharts-graphical" transform="translate(71.90684560139974, 30)"><defs id="SvgjsDefs1184"><linearGradient id="SvgjsLinearGradient1189" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1190" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1191" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1192" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskqps02lyc"><rect id="SvgjsRect1194" width="322.7170562744141" height="165" x="-17.6239018758138" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskqps02lyc"></clipPath><clipPath id="nonForecastMaskqps02lyc"></clipPath><clipPath id="gridRectMarkerMaskqps02lyc"><rect id="SvgjsRect1195" width="291.46925252278646" height="169" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1193" width="14.373462626139322" height="165" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1189)" class="apexcharts-xcrosshairs" y2="165" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1214" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1215" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1233" class="apexcharts-grid"><g id="SvgjsG1234" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1236" x1="-15.623901875813802" y1="0" x2="303.0931543986003" y2="0" stroke="#e7e7e8" stroke-dasharray="8" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1237" x1="-15.623901875813802" y1="55" x2="303.0931543986003" y2="55" stroke="#e7e7e8" stroke-dasharray="8" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1238" x1="-15.623901875813802" y1="110" x2="303.0931543986003" y2="110" stroke="#e7e7e8" stroke-dasharray="8" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1239" x1="-15.623901875813802" y1="165" x2="303.0931543986003" y2="165" stroke="#e7e7e8" stroke-dasharray="8" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1235" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1241" x1="0" y1="165" x2="287.46925252278646" y2="165" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1240" x1="0" y1="1" x2="0" y2="165" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1196" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1197" class="apexcharts-series" rel="1" seriesName="Sales" data:realIndex="0"><path id="SvgjsPath1201" d="M -7.186731313069661 157L -7.186731313069661 114.33333333333333Q -7.186731313069661 106.33333333333333 0.8132686869303392 106.33333333333333L -0.8132686869303392 106.33333333333333Q 7.186731313069661 106.33333333333333 7.186731313069661 114.33333333333333L 7.186731313069661 114.33333333333333L 7.186731313069661 157Q 7.186731313069661 165 -0.8132686869303392 165L 0.8132686869303392 165Q -7.186731313069661 165 -7.186731313069661 157z" fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskqps02lyc)" pathTo="M -7.186731313069661 157L -7.186731313069661 114.33333333333333Q -7.186731313069661 106.33333333333333 0.8132686869303392 106.33333333333333L -0.8132686869303392 106.33333333333333Q 7.186731313069661 106.33333333333333 7.186731313069661 114.33333333333333L 7.186731313069661 114.33333333333333L 7.186731313069661 157Q 7.186731313069661 165 -0.8132686869303392 165L 0.8132686869303392 165Q -7.186731313069661 165 -7.186731313069661 157z" pathFrom="M -7.186731313069661 157L -7.186731313069661 157L 7.186731313069661 157L 7.186731313069661 157L 7.186731313069661 157L 7.186731313069661 157L 7.186731313069661 157L -7.186731313069661 157" cy="106.33333333333333" cx="7.186731313069661" j="0" val="32" barHeight="58.66666666666667" barWidth="14.373462626139322"></path><path id="SvgjsPath1203" d="M 40.72481077406141 157L 40.72481077406141 72.16666666666666Q 40.72481077406141 64.16666666666666 48.72481077406141 64.16666666666666L 47.09827340020073 64.16666666666666Q 55.09827340020073 64.16666666666666 55.09827340020073 72.16666666666666L 55.09827340020073 72.16666666666666L 55.09827340020073 157Q 55.09827340020073 165 47.09827340020073 165L 48.72481077406141 165Q 40.72481077406141 165 40.72481077406141 157z" fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskqps02lyc)" pathTo="M 40.72481077406141 157L 40.72481077406141 72.16666666666666Q 40.72481077406141 64.16666666666666 48.72481077406141 64.16666666666666L 47.09827340020073 64.16666666666666Q 55.09827340020073 64.16666666666666 55.09827340020073 72.16666666666666L 55.09827340020073 72.16666666666666L 55.09827340020073 157Q 55.09827340020073 165 47.09827340020073 165L 48.72481077406141 165Q 40.72481077406141 165 40.72481077406141 157z" pathFrom="M 40.72481077406141 157L 40.72481077406141 157L 55.09827340020073 157L 55.09827340020073 157L 55.09827340020073 157L 55.09827340020073 157L 55.09827340020073 157L 40.72481077406141 157" cy="64.16666666666666" cx="55.09827340020073" j="1" val="55" barHeight="100.83333333333334" barWidth="14.373462626139322"></path><path id="SvgjsPath1205" d="M 88.63635286119249 157L 88.63635286119249 90.5Q 88.63635286119249 82.5 96.63635286119249 82.5L 95.00981548733182 82.5Q 103.00981548733182 82.5 103.00981548733182 90.5L 103.00981548733182 90.5L 103.00981548733182 157Q 103.00981548733182 165 95.00981548733182 165L 96.63635286119249 165Q 88.63635286119249 165 88.63635286119249 157z" fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskqps02lyc)" pathTo="M 88.63635286119249 157L 88.63635286119249 90.5Q 88.63635286119249 82.5 96.63635286119249 82.5L 95.00981548733182 82.5Q 103.00981548733182 82.5 103.00981548733182 90.5L 103.00981548733182 90.5L 103.00981548733182 157Q 103.00981548733182 165 95.00981548733182 165L 96.63635286119249 165Q 88.63635286119249 165 88.63635286119249 157z" pathFrom="M 88.63635286119249 157L 88.63635286119249 157L 103.00981548733182 157L 103.00981548733182 157L 103.00981548733182 157L 103.00981548733182 157L 103.00981548733182 157L 88.63635286119249 157" cy="82.5" cx="103.00981548733182" j="2" val="45" barHeight="82.5" barWidth="14.373462626139322"></path><path id="SvgjsPath1207" d="M 136.54789494832357 157L 136.54789494832357 35.5Q 136.54789494832357 27.5 144.54789494832357 27.5L 142.9213575744629 27.5Q 150.9213575744629 27.5 150.9213575744629 35.5L 150.9213575744629 35.5L 150.9213575744629 157Q 150.9213575744629 165 142.9213575744629 165L 144.54789494832357 165Q 136.54789494832357 165 136.54789494832357 157z" fill="rgba(144,85,253,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskqps02lyc)" pathTo="M 136.54789494832357 157L 136.54789494832357 35.5Q 136.54789494832357 27.5 144.54789494832357 27.5L 142.9213575744629 27.5Q 150.9213575744629 27.5 150.9213575744629 35.5L 150.9213575744629 35.5L 150.9213575744629 157Q 150.9213575744629 165 142.9213575744629 165L 144.54789494832357 165Q 136.54789494832357 165 136.54789494832357 157z" pathFrom="M 136.54789494832357 157L 136.54789494832357 157L 150.9213575744629 157L 150.9213575744629 157L 150.9213575744629 157L 150.9213575744629 157L 150.9213575744629 157L 136.54789494832357 157" cy="27.5" cx="150.9213575744629" j="3" val="75" barHeight="137.5" barWidth="14.373462626139322"></path><path id="SvgjsPath1209" d="M 184.45943703545464 157L 184.45943703545464 72.16666666666666Q 184.45943703545464 64.16666666666666 192.45943703545464 64.16666666666666L 190.83289966159396 64.16666666666666Q 198.83289966159396 64.16666666666666 198.83289966159396 72.16666666666666L 198.83289966159396 72.16666666666666L 198.83289966159396 157Q 198.83289966159396 165 190.83289966159396 165L 192.45943703545464 165Q 184.45943703545464 165 184.45943703545464 157z" fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskqps02lyc)" pathTo="M 184.45943703545464 157L 184.45943703545464 72.16666666666666Q 184.45943703545464 64.16666666666666 192.45943703545464 64.16666666666666L 190.83289966159396 64.16666666666666Q 198.83289966159396 64.16666666666666 198.83289966159396 72.16666666666666L 198.83289966159396 72.16666666666666L 198.83289966159396 157Q 198.83289966159396 165 190.83289966159396 165L 192.45943703545464 165Q 184.45943703545464 165 184.45943703545464 157z" pathFrom="M 184.45943703545464 157L 184.45943703545464 157L 198.83289966159396 157L 198.83289966159396 157L 198.83289966159396 157L 198.83289966159396 157L 198.83289966159396 157L 184.45943703545464 157" cy="64.16666666666666" cx="198.83289966159396" j="4" val="55" barHeight="100.83333333333334" barWidth="14.373462626139322"></path><path id="SvgjsPath1211" d="M 232.3709791225857 157L 232.3709791225857 108.83333333333333Q 232.3709791225857 100.83333333333333 240.3709791225857 100.83333333333333L 238.74444174872502 100.83333333333333Q 246.74444174872502 100.83333333333333 246.74444174872502 108.83333333333333L 246.74444174872502 108.83333333333333L 246.74444174872502 157Q 246.74444174872502 165 238.74444174872502 165L 240.3709791225857 165Q 232.3709791225857 165 232.3709791225857 157z" fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskqps02lyc)" pathTo="M 232.3709791225857 157L 232.3709791225857 108.83333333333333Q 232.3709791225857 100.83333333333333 240.3709791225857 100.83333333333333L 238.74444174872502 100.83333333333333Q 246.74444174872502 100.83333333333333 246.74444174872502 108.83333333333333L 246.74444174872502 108.83333333333333L 246.74444174872502 157Q 246.74444174872502 165 238.74444174872502 165L 240.3709791225857 165Q 232.3709791225857 165 232.3709791225857 157z" pathFrom="M 232.3709791225857 157L 232.3709791225857 157L 246.74444174872502 157L 246.74444174872502 157L 246.74444174872502 157L 246.74444174872502 157L 246.74444174872502 157L 232.3709791225857 157" cy="100.83333333333333" cx="246.74444174872502" j="5" val="35" barHeight="64.16666666666667" barWidth="14.373462626139322"></path><path id="SvgjsPath1213" d="M 280.2825212097168 157L 280.2825212097168 44.66666666666666Q 280.2825212097168 36.66666666666666 288.2825212097168 36.66666666666666L 286.6559838358561 36.66666666666666Q 294.6559838358561 36.66666666666666 294.6559838358561 44.66666666666666L 294.6559838358561 44.66666666666666L 294.6559838358561 157Q 294.6559838358561 165 286.6559838358561 165L 288.2825212097168 165Q 280.2825212097168 165 280.2825212097168 157z" fill="rgba(240,242,248,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskqps02lyc)" pathTo="M 280.2825212097168 157L 280.2825212097168 44.66666666666666Q 280.2825212097168 36.66666666666666 288.2825212097168 36.66666666666666L 286.6559838358561 36.66666666666666Q 294.6559838358561 36.66666666666666 294.6559838358561 44.66666666666666L 294.6559838358561 44.66666666666666L 294.6559838358561 157Q 294.6559838358561 165 286.6559838358561 165L 288.2825212097168 165Q 280.2825212097168 165 280.2825212097168 157z" pathFrom="M 280.2825212097168 157L 280.2825212097168 157L 294.6559838358561 157L 294.6559838358561 157L 294.6559838358561 157L 294.6559838358561 157L 294.6559838358561 157L 280.2825212097168 157" cy="36.66666666666666" cx="294.6559838358561" j="6" val="70" barHeight="128.33333333333334" barWidth="14.373462626139322"></path><g id="SvgjsG1199" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1200" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1202" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1204" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1206" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1208" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1210" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1212" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1198" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1242" x1="-15.623901875813802" y1="0" x2="303.0931543986003" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1243" x1="-15.623901875813802" y1="0" x2="303.0931543986003" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1244" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1245" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1246" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1247" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1248" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><g id="SvgjsG1223" class="apexcharts-yaxis" rel="0" transform="translate(22.282943725585938, 0)"><g id="SvgjsG1224" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1225" font-family="Inter" x="20" y="31.3" text-anchor="end" dominant-baseline="auto" font-size="0.75rem" font-weight="400" fill="#b4b2b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter;"><tspan id="SvgjsTspan1226">90K</tspan><title>90K</title></text><text id="SvgjsText1227" font-family="Inter" x="20" y="86.3" text-anchor="end" dominant-baseline="auto" font-size="0.75rem" font-weight="400" fill="#b4b2b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter;"><tspan id="SvgjsTspan1228">60K</tspan><title>60K</title></text><text id="SvgjsText1229" font-family="Inter" x="20" y="141.3" text-anchor="end" dominant-baseline="auto" font-size="0.75rem" font-weight="400" fill="#b4b2b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter;"><tspan id="SvgjsTspan1230">30K</tspan><title>30K</title></text><text id="SvgjsText1231" font-family="Inter" x="20" y="196.3" text-anchor="end" dominant-baseline="auto" font-size="0.75rem" font-weight="400" fill="#b4b2b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter;"><tspan id="SvgjsTspan1232">0K</tspan><title>0K</title></text></g></g><g id="SvgjsG1186" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 100px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(240, 242, 248);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                  <div class="mt-1 mt-md-3">
                    <div class="d-flex align-items-center gap-3">
                      <h3 class="mb-0">45%</h3>
                      <p class="mb-0">Your sales performance is 45% 😎 better compared to last month</p>
                    </div>
                    <div class="d-grid mt-3 mt-md-4">
                      <button class="btn btn-primary waves-effect waves-light" type="button">Details</button>
                    </div>
                  </div>
                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 422px; height: 353px;"></div></div><div class="contract-trigger"></div></div></div>
              </div>
            </div>
            <!--/ Weekly Overview Chart -->

            <!-- Total Earnings -->
            <div class="col-xl-4 col-md-6">
              <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5 class="card-title m-0 me-2">Total Earning</h5>
                  <div class="dropdown">
                    <button class="btn p-0" type="button" id="totalEarnings" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="mdi mdi-dots-vertical mdi-24px"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarnings">
                      <a class="dropdown-item waves-effect" href="javascript:void(0);">Last 28 Days</a>
                      <a class="dropdown-item waves-effect" href="javascript:void(0);">Last Month</a>
                      <a class="dropdown-item waves-effect" href="javascript:void(0);">Last Year</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="mb-3 mt-md-3 mb-md-5">
                    <div class="d-flex align-items-center">
                      <h2 class="mb-0">$24,895</h2>
                      <span class="text-success ms-2 fw-medium">
                        <i class="mdi mdi-menu-up mdi-24px"></i>
                        <small>10%</small>
                      </span>
                    </div>
                    <small class="mt-1">Compared to $84,325 last year</small>
                  </div>
                  <ul class="p-0 m-0">
                    <li class="d-flex mb-4 pb-md-2">
                      <div class="avatar flex-shrink-0 me-3">
                        <img src="{{ asset('assets/img/icons/misc/zipcar.png') }}" alt="zipcar" class="rounded">
                      </div>
                      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                          <h6 class="mb-0">Zipcar</h6>
                          <small>Vuejs, React &amp; HTML</small>
                        </div>
                        <div>
                          <h6 class="mb-2">$24,895.65</h6>
                          <div class="progress bg-label-primary" style="height: 4px">
                            <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="d-flex mb-4 pb-md-2">
                      <div class="avatar flex-shrink-0 me-3">
                        <img src="{{ asset('assets/img/icons/misc/bitbank.png') }}" alt="bitbank" class="rounded">
                      </div>
                      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                          <h6 class="mb-0">Bitbank</h6>
                          <small>Sketch, Figma &amp; XD</small>
                        </div>
                        <div>
                          <h6 class="mb-2">$8,6500.20</h6>
                          <div class="progress bg-label-info" style="height: 4px">
                            <div class="progress-bar bg-info" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="d-flex mb-md-3">
                      <div class="avatar flex-shrink-0 me-3">
                        <img src="{{ asset('assets/img/icons/misc/aviato.png') }}" alt="aviato" class="rounded">
                      </div>
                      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                          <h6 class="mb-0">Aviato</h6>
                          <small>HTML &amp; Angular</small>
                        </div>
                        <div>
                          <h6 class="mb-2">$1,2450.80</h6>
                          <div class="progress bg-label-secondary" style="height: 4px">
                            <div class="progress-bar bg-secondary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!--/ Total Earnings -->

            <!-- Four Cards -->
            <div class="col-xl-4 col-md-6">
              <div class="row gy-4">
                <!-- Total Profit line chart -->
                <div class="col-sm-6">
                  <div class="card h-100">
                    <div class="card-header pb-0">
                      <h4 class="mb-0">$86.4k</h4>
                    </div>
                    <div class="card-body" style="position: relative;">
                      <div id="totalProfitLineChart" class="mb-3" style="min-height: 90px;"><div id="apexchartsnlp3kupsk" class="apexcharts-canvas apexchartsnlp3kupsk apexcharts-theme-light" style="width: 159px; height: 90px;"><svg id="SvgjsSvg1249" width="159" height="90" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1251" class="apexcharts-inner apexcharts-graphical" transform="translate(3, 15)"><defs id="SvgjsDefs1250"><clipPath id="gridRectMasknlp3kupsk"><rect id="SvgjsRect1256" width="154" height="78" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasknlp3kupsk"></clipPath><clipPath id="nonForecastMasknlp3kupsk"></clipPath><clipPath id="gridRectMarkerMasknlp3kupsk"><rect id="SvgjsRect1257" width="175" height="103" x="-14" y="-14" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1255" x1="0" y1="0" x2="0" y2="75" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="75" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1274" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1275" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1284" class="apexcharts-grid"><g id="SvgjsG1285" class="apexcharts-gridlines-horizontal"></g><g id="SvgjsG1286" class="apexcharts-gridlines-vertical"><line id="SvgjsLine1287" x1="0" y1="0" x2="0" y2="75" stroke="#b4b2b7" stroke-dasharray="6" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1288" x1="29.4" y1="0" x2="29.4" y2="75" stroke="#b4b2b7" stroke-dasharray="6" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1289" x1="58.8" y1="0" x2="58.8" y2="75" stroke="#b4b2b7" stroke-dasharray="6" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1290" x1="88.19999999999999" y1="0" x2="88.19999999999999" y2="75" stroke="#b4b2b7" stroke-dasharray="6" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1291" x1="117.6" y1="0" x2="117.6" y2="75" stroke="#b4b2b7" stroke-dasharray="6" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1292" x1="147" y1="0" x2="147" y2="75" stroke="#b4b2b7" stroke-dasharray="6" stroke-linecap="butt" class="apexcharts-gridline"></line></g><line id="SvgjsLine1294" x1="0" y1="75" x2="147" y2="75" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1293" x1="0" y1="1" x2="0" y2="75" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1258" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1259" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1273" d="M 0 75L 29.4 45L 58.8 67.5L 88.19999999999999 30L 117.6 52.5L 147 7.5" fill="none" fill-opacity="1" stroke="rgba(144,85,253,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMasknlp3kupsk)" pathTo="M 0 75L 29.4 45L 58.8 67.5L 88.19999999999999 30L 117.6 52.5L 147 7.5" pathFrom="M -1 75L -1 75L 29.4 75L 58.8 75L 88.19999999999999 75L 117.6 75L 147 75"></path><g id="SvgjsG1260" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG1262" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasknlp3kupsk)"><circle id="SvgjsCircle1263" r="6" cx="0" cy="75" class="apexcharts-marker no-pointer-events wymjt3wzq" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="6"></circle><circle id="SvgjsCircle1264" r="6" cx="29.4" cy="45" class="apexcharts-marker no-pointer-events wtnhazdle" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1265" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasknlp3kupsk)"><circle id="SvgjsCircle1266" r="6" cx="58.8" cy="67.5" class="apexcharts-marker no-pointer-events wx6pb3156" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1267" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasknlp3kupsk)"><circle id="SvgjsCircle1268" r="6" cx="88.19999999999999" cy="30" class="apexcharts-marker no-pointer-events wc2e41gml" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1269" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasknlp3kupsk)"><circle id="SvgjsCircle1270" r="6" cx="117.6" cy="52.5" class="apexcharts-marker no-pointer-events wqnva28p4" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1271" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMasknlp3kupsk)"><circle id="SvgjsCircle1272" r="6" cx="147" cy="7.5" class="apexcharts-marker no-pointer-events wmx2ts0uw" stroke="#9055fd" fill="#ffffff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="6"></circle></g></g></g><g id="SvgjsG1261" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1295" x1="0" y1="0" x2="147" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1296" x1="0" y1="0" x2="147" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1297" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1298" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1299" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1300" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1301" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1254" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1282" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG1283" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG1252" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 45px;"></div></div></div>
                      <h6 class="text-center mb-0">Total Profit</h6>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 200px; height: 152px;"></div></div><div class="contract-trigger"></div></div></div>
                  </div>
                </div>
                <!--/ Total Profit line chart -->
                <!-- Total Profit Weekly Project -->
                <div class="col-sm-6">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <div class="avatar">
                        <div class="avatar-initial bg-secondary rounded-circle shadow">
                          <i class="mdi mdi-poll mdi-24px"></i>
                        </div>
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="totalProfitID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="mdi mdi-dots-vertical mdi-24px"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalProfitID">
                          <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                          <a class="dropdown-item waves-effect" href="javascript:void(0);">Share</a>
                          <a class="dropdown-item waves-effect" href="javascript:void(0);">Update</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body mt-mg-1">
                      <h6 class="mb-2">Total Profit</h6>
                      <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                        <h4 class="mb-0 me-2">$25.6k</h4>
                        <small class="text-success mt-1">+42%</small>
                      </div>
                      <small>Weekly Project</small>
                    </div>
                  </div>
                </div>
                <!--/ Total Profit Weekly Project -->
                <!-- New Yearly Project -->
                <div class="col-sm-6">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <div class="avatar">
                        <div class="avatar-initial bg-primary rounded-circle shadow-sm">
                          <i class="mdi mdi-wallet-travel mdi-24px"></i>
                        </div>
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="newProjectID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="mdi mdi-dots-vertical mdi-24px"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="newProjectID">
                          <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                          <a class="dropdown-item waves-effect" href="javascript:void(0);">Share</a>
                          <a class="dropdown-item waves-effect" href="javascript:void(0);">Update</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body mt-mg-1">
                      <h6 class="mb-2">New Project</h6>
                      <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                        <h4 class="mb-0 me-2">862</h4>
                        <small class="text-danger mt-1">-18%</small>
                      </div>
                      <small>Yearly Project</small>
                    </div>
                  </div>
                </div>
                <!--/ New Yearly Project -->
                <!-- Sessions chart -->
                <div class="col-sm-6">
                  <div class="card h-100">
                    <div class="card-header pb-0">
                      <h4 class="mb-0">2,856</h4>
                    </div>
                    <div class="card-body" style="position: relative;">
                      <div id="sessionsColumnChart" class="mb-3" style="min-height: 90px;"><div id="apexchartsdjdrwh76" class="apexcharts-canvas apexchartsdjdrwh76 apexcharts-theme-light" style="width: 159px; height: 90px;"><svg id="SvgjsSvg1302" width="159" height="90" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1304" class="apexcharts-inner apexcharts-graphical" transform="translate(13.966666666666667, 20)"><defs id="SvgjsDefs1303"><linearGradient id="SvgjsLinearGradient1307" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1308" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1309" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1310" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskdjdrwh76"><rect id="SvgjsRect1312" width="153" height="70" x="-11.966666666666667" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskdjdrwh76"></clipPath><clipPath id="nonForecastMaskdjdrwh76"></clipPath><clipPath id="gridRectMarkerMaskdjdrwh76"><rect id="SvgjsRect1313" width="133.06666666666666" height="74" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1311" width="0" height="70" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1307)" class="apexcharts-xcrosshairs" y2="70" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1333" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1334" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1343" class="apexcharts-grid"><g id="SvgjsG1344" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1346" x1="-9.966666666666667" y1="0" x2="139.03333333333333" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1347" x1="-9.966666666666667" y1="17.5" x2="139.03333333333333" y2="17.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1348" x1="-9.966666666666667" y1="35" x2="139.03333333333333" y2="35" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1349" x1="-9.966666666666667" y1="52.5" x2="139.03333333333333" y2="52.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1350" x1="-9.966666666666667" y1="70" x2="139.03333333333333" y2="70" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1345" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1352" x1="0" y1="70" x2="129.06666666666666" y2="70" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1351" x1="0" y1="1" x2="0" y2="70" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1314" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1315" class="apexcharts-series" rel="1" seriesName="seriesx1" data:realIndex="0"><rect id="SvgjsRect1318" width="6.453333333333332" height="70" x="-3.226666666666666" y="0" rx="4" ry="4" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#F0F2F8" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath1320" d="M -3.226666666666666 66L -3.226666666666666 47.75Q -3.226666666666666 43.75 0.7733333333333339 43.75L -0.7733333333333339 43.75Q 3.226666666666666 43.75 3.226666666666666 47.75L 3.226666666666666 47.75L 3.226666666666666 66Q 3.226666666666666 70 -0.7733333333333339 70L 0.7733333333333339 70Q -3.226666666666666 70 -3.226666666666666 66z" fill="rgba(255,76,81,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdjdrwh76)" pathTo="M -3.226666666666666 66L -3.226666666666666 47.75Q -3.226666666666666 43.75 0.7733333333333339 43.75L -0.7733333333333339 43.75Q 3.226666666666666 43.75 3.226666666666666 47.75L 3.226666666666666 47.75L 3.226666666666666 66Q 3.226666666666666 70 -0.7733333333333339 70L 0.7733333333333339 70Q -3.226666666666666 70 -3.226666666666666 66z" pathFrom="M -3.226666666666666 66L -3.226666666666666 66L 3.226666666666666 66L 3.226666666666666 66L 3.226666666666666 66L 3.226666666666666 66L 3.226666666666666 66L -3.226666666666666 66" cy="43.75" cx="3.226666666666666" j="0" val="30" barHeight="26.25" barWidth="6.453333333333332"></path><rect id="SvgjsRect1321" width="6.453333333333332" height="70" x="29.04" y="0" rx="4" ry="4" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#F0F2F8" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath1323" d="M 29.04 66L 29.04 12.75Q 29.04 8.75 33.04 8.75L 31.493333333333332 8.75Q 35.49333333333333 8.75 35.49333333333333 12.75L 35.49333333333333 12.75L 35.49333333333333 66Q 35.49333333333333 70 31.493333333333332 70L 33.04 70Q 29.04 70 29.04 66z" fill="rgba(144,85,253,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdjdrwh76)" pathTo="M 29.04 66L 29.04 12.75Q 29.04 8.75 33.04 8.75L 31.493333333333332 8.75Q 35.49333333333333 8.75 35.49333333333333 12.75L 35.49333333333333 12.75L 35.49333333333333 66Q 35.49333333333333 70 31.493333333333332 70L 33.04 70Q 29.04 70 29.04 66z" pathFrom="M 29.04 66L 29.04 66L 35.49333333333333 66L 35.49333333333333 66L 35.49333333333333 66L 35.49333333333333 66L 35.49333333333333 66L 29.04 66" cy="8.75" cx="35.49333333333333" j="1" val="70" barHeight="61.25" barWidth="6.453333333333332"></path><rect id="SvgjsRect1324" width="6.453333333333332" height="70" x="61.306666666666665" y="0" rx="4" ry="4" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#F0F2F8" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath1326" d="M 61.306666666666665 66L 61.306666666666665 30.25Q 61.306666666666665 26.25 65.30666666666667 26.25L 63.75999999999999 26.25Q 67.75999999999999 26.25 67.75999999999999 30.25L 67.75999999999999 30.25L 67.75999999999999 66Q 67.75999999999999 70 63.75999999999999 70L 65.30666666666667 70Q 61.306666666666665 70 61.306666666666665 66z" fill="rgba(255,76,81,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdjdrwh76)" pathTo="M 61.306666666666665 66L 61.306666666666665 30.25Q 61.306666666666665 26.25 65.30666666666667 26.25L 63.75999999999999 26.25Q 67.75999999999999 26.25 67.75999999999999 30.25L 67.75999999999999 30.25L 67.75999999999999 66Q 67.75999999999999 70 63.75999999999999 70L 65.30666666666667 70Q 61.306666666666665 70 61.306666666666665 66z" pathFrom="M 61.306666666666665 66L 61.306666666666665 66L 67.75999999999999 66L 67.75999999999999 66L 67.75999999999999 66L 67.75999999999999 66L 67.75999999999999 66L 61.306666666666665 66" cy="26.25" cx="67.75999999999999" j="2" val="50" barHeight="43.75" barWidth="6.453333333333332"></path><rect id="SvgjsRect1327" width="6.453333333333332" height="70" x="93.57333333333334" y="0" rx="4" ry="4" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#F0F2F8" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath1329" d="M 93.57333333333334 66L 93.57333333333334 39Q 93.57333333333334 35 97.57333333333334 35L 96.02666666666667 35Q 100.02666666666667 35 100.02666666666667 39L 100.02666666666667 39L 100.02666666666667 66Q 100.02666666666667 70 96.02666666666667 70L 97.57333333333334 70Q 93.57333333333334 70 93.57333333333334 66z" fill="rgba(144,85,253,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdjdrwh76)" pathTo="M 93.57333333333334 66L 93.57333333333334 39Q 93.57333333333334 35 97.57333333333334 35L 96.02666666666667 35Q 100.02666666666667 35 100.02666666666667 39L 100.02666666666667 39L 100.02666666666667 66Q 100.02666666666667 70 96.02666666666667 70L 97.57333333333334 70Q 93.57333333333334 70 93.57333333333334 66z" pathFrom="M 93.57333333333334 66L 93.57333333333334 66L 100.02666666666667 66L 100.02666666666667 66L 100.02666666666667 66L 100.02666666666667 66L 100.02666666666667 66L 93.57333333333334 66" cy="35" cx="100.02666666666667" j="3" val="40" barHeight="35" barWidth="6.453333333333332"></path><rect id="SvgjsRect1330" width="6.453333333333332" height="70" x="125.84" y="0" rx="4" ry="4" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#F0F2F8" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath1332" d="M 125.84 66L 125.84 21.5Q 125.84 17.5 129.84 17.5L 128.29333333333332 17.5Q 132.29333333333332 17.5 132.29333333333332 21.5L 132.29333333333332 21.5L 132.29333333333332 66Q 132.29333333333332 70 128.29333333333332 70L 129.84 70Q 125.84 70 125.84 66z" fill="rgba(144,85,253,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskdjdrwh76)" pathTo="M 125.84 66L 125.84 21.5Q 125.84 17.5 129.84 17.5L 128.29333333333332 17.5Q 132.29333333333332 17.5 132.29333333333332 21.5L 132.29333333333332 21.5L 132.29333333333332 66Q 132.29333333333332 70 128.29333333333332 70L 129.84 70Q 125.84 70 125.84 66z" pathFrom="M 125.84 66L 125.84 66L 132.29333333333332 66L 132.29333333333332 66L 132.29333333333332 66L 132.29333333333332 66L 132.29333333333332 66L 125.84 66" cy="17.5" cx="132.29333333333332" j="4" val="60" barHeight="52.5" barWidth="6.453333333333332"></path><g id="SvgjsG1317" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1319" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1322" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1325" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1328" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1331" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1316" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1353" x1="-9.966666666666667" y1="0" x2="139.03333333333333" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1354" x1="-9.966666666666667" y1="0" x2="139.03333333333333" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1355" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1356" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1357" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1358" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1359" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><g id="SvgjsG1341" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG1342" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG1305" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 45px;"></div></div></div>
                      <h6 class="text-center mb-0">Sessions</h6>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 200px; height: 152px;"></div></div><div class="contract-trigger"></div></div></div>
                  </div>
                </div>
                <!--/ Sessions chart -->
              </div>
            </div>
            <!--/ Total Earning -->

            <!-- Sales by Countries -->
            <div class="col-xl-4 col-md-6">
              <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5 class="card-title m-0 me-2">Sales by Countries</h5>
                  <div class="dropdown">
                    <button class="btn p-0" type="button" id="saleStatus" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="mdi mdi-dots-vertical mdi-24px"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="saleStatus">
                      <a class="dropdown-item waves-effect" href="javascript:void(0);">Last 28 Days</a>
                      <a class="dropdown-item waves-effect" href="javascript:void(0);">Last Month</a>
                      <a class="dropdown-item waves-effect" href="javascript:void(0);">Last Year</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-center">
                      <div class="avatar me-3">
                        <div class="avatar-initial bg-label-success rounded-circle">US</div>
                      </div>
                      <div>
                        <div class="d-flex align-items-center gap-1">
                          <h6 class="mb-0">$8,656k</h6>
                          <i class="mdi mdi-chevron-up mdi-24px text-success"></i>
                          <small class="text-success">25.8%</small>
                        </div>
                        <small>United states of america</small>
                      </div>
                    </div>
                    <div class="text-end">
                      <h6 class="mb-0">894k</h6>
                      <small>Sales</small>
                    </div>
                  </div>
                  <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-center">
                      <div class="avatar me-3">
                        <span class="avatar-initial bg-label-danger rounded-circle">UK</span>
                      </div>
                      <div>
                        <div class="d-flex align-items-center gap-1">
                          <h6 class="mb-0">$2,415k</h6>
                          <i class="mdi mdi-chevron-down mdi-24px text-danger"></i>
                          <small class="text-danger">6.2%</small>
                        </div>
                        <small>United Kingdom</small>
                      </div>
                    </div>
                    <div class="text-end">
                      <h6 class="mb-0">645k</h6>
                      <small>Sales</small>
                    </div>
                  </div>
                  <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-center">
                      <div class="avatar me-3">
                        <span class="avatar-initial bg-label-warning rounded-circle">IN</span>
                      </div>
                      <div>
                        <div class="d-flex align-items-center gap-1">
                          <h6 class="mb-0">865k</h6>
                          <i class="mdi mdi-chevron-up mdi-24px text-success"></i>
                          <small class="text-success"> 12.4%</small>
                        </div>
                        <small>India</small>
                      </div>
                    </div>
                    <div class="text-end">
                      <h6 class="mb-0">148k</h6>
                      <small>Sales</small>
                    </div>
                  </div>
                  <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-center">
                      <div class="avatar me-3">
                        <span class="avatar-initial bg-label-secondary rounded-circle">JA</span>
                      </div>
                      <div>
                        <div class="d-flex align-items-center gap-1">
                          <h6 class="mb-0">$745k</h6>
                          <i class="mdi mdi-chevron-down mdi-24px text-danger"></i>
                          <small class="text-danger">11.9%</small>
                        </div>
                        <small>Japan</small>
                      </div>
                    </div>
                    <div class="text-end">
                      <h6 class="mb-0">86k</h6>
                      <small>Sales</small>
                    </div>
                  </div>
                  <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                      <div class="avatar me-3">
                        <span class="avatar-initial bg-label-danger rounded-circle">KO</span>
                      </div>
                      <div>
                        <div class="d-flex align-items-center gap-1">
                          <h6 class="mb-0">$45k</h6>
                          <i class="mdi mdi-chevron-up mdi-24px text-success"></i>
                          <small class="text-success">16.2%</small>
                        </div>
                        <small>Korea</small>
                      </div>
                    </div>
                    <div class="text-end">
                      <h6 class="mb-0">42k</h6>
                      <small>Sales</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Sales by Countries -->

            <!-- Deposit / Withdraw -->
            <div class="col-xl-8">
              <div class="card h-100">
                <div class="card-body row g-2">
                  <div class="col-12 col-md-6 card-separator pe-0 pe-md-3">
                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                      <h5 class="m-0 me-2">Deposit</h5>
                      <a class="fw-medium" href="javascript:void(0);">View all</a>
                    </div>
                    <div class="pt-2">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4 align-items-center pb-2">
                          <div class="flex-shrink-0 me-3">
                            <img src="{{ asset('assets/img/icons/payments/gumroad.png') }}" class="img-fluid" alt="gumroad" height="30" width="30">
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Gumroad Account</h6>
                              <small>Sell UI Kit</small>
                            </div>
                            <h6 class="text-success mb-0">+$4,650</h6>
                          </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center pb-2">
                          <div class="flex-shrink-0 me-3">
                            <img src="{{ asset('assets/img/icons/payments/mastercard-2.png') }}" class="img-fluid" alt="mastercard" height="30" width="30">
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Mastercard</h6>
                              <small>Wallet deposit</small>
                            </div>
                            <h6 class="text-success mb-0">+$92,705</h6>
                          </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center pb-2">
                          <div class="flex-shrink-0 me-3">
                            <img src="{{ asset('assets/img/icons/payments/stripes.png') }}" class="img-fluid" alt="stripes" height="30" width="30">
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Stripe Account</h6>
                              <small>iOS Application</small>
                            </div>
                            <h6 class="text-success mb-0">+$957</h6>
                          </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center pb-2">
                          <div class="flex-shrink-0 me-3">
                            <img src="{{ asset('assets/img/icons/payments/american-bank.png') }}" class="img-fluid" alt="american" height="30" width="30">
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">American Bank</h6>
                              <small>Bank Transfer</small>
                            </div>
                            <h6 class="text-success mb-0">+$6,837</h6>
                          </div>
                        </li>
                        <li class="d-flex align-items-center">
                          <div class="flex-shrink-0 me-3">
                            <img src="{{ asset('assets/img/icons/payments/citi.png') }}" class="img-fluid" alt="citi" height="30" width="30">
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Bank Account</h6>
                              <small>Wallet deposit</small>
                            </div>
                            <h6 class="text-success mb-0">+$446</h6>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 ps-0 ps-md-3 mt-3 mt-md-2">
                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                      <h5 class="m-0 me-2">Withdraw</h5>
                      <a class="fw-medium" href="javascript:void(0);">View all</a>
                    </div>
                    <div class="pt-2">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4 align-items-center pb-2">
                          <div class="flex-shrink-0 me-3">
                            <img src="{{ asset('assets/img/icons/brands/google.png') }}" class="img-fluid" alt="google" height="30" width="30">
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Google Adsense</h6>
                              <small>Paypal deposit</small>
                            </div>
                            <h6 class="text-danger mb-0">-$145</h6>
                          </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center pb-2">
                          <div class="flex-shrink-0 me-3">
                            <img src="{{ asset('assets/img/icons/brands/github.png') }}" class="img-fluid" alt="github" height="30" width="30">
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Github Enterprise</h6>
                              <small>Security &amp; compliance</small>
                            </div>
                            <h6 class="text-danger mb-0">-$1870</h6>
                          </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center pb-2">
                          <div class="flex-shrink-0 me-3">
                            <img src="{{ asset('assets/img/icons/brands/slack.png') }}" class="img-fluid" alt="slack" height="30" width="30">
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Upgrade Slack Plan</h6>
                              <small>Debit card deposit</small>
                            </div>
                            <h6 class="text-danger mb-0">$450</h6>
                          </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center pb-2">
                          <div class="flex-shrink-0 me-3">
                            <img src="{{ asset('assets/img/icons/payments/digital-ocean.png') }}" class="img-fluid" alt="digital" height="30" width="30">
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Digital Ocean</h6>
                              <small>Cloud Hosting</small>
                            </div>
                            <h6 class="text-danger mb-0">-$540</h6>
                          </div>
                        </li>
                        <li class="d-flex align-items-center">
                          <div class="flex-shrink-0 me-3">
                            <img src="{{ asset('assets/img/icons/brands/aws.png') }}" class="img-fluid" alt="aws" height="30" width="30">
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">AWS Account</h6>
                              <small>Choosing a Cloud Platform</small>
                            </div>
                            <h6 class="text-danger mb-0">-$21</h6>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Deposit / Withdraw -->

            <!-- Data Tables -->
            <div class="col-12">
              <div class="card">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="table-light">
                      <tr>
                        <th class="text-truncate">User</th>
                        <th class="text-truncate">Email</th>
                        <th class="text-truncate">Role</th>
                        <th class="text-truncate">Age</th>
                        <th class="text-truncate">Salary</th>
                        <th class="text-truncate">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-sm me-3">
                              <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle">
                            </div>
                            <div>
                              <h6 class="mb-0 text-truncate">Jordan Stevenson</h6>
                              <small class="text-truncate">@amiccoo</small>
                            </div>
                          </div>
                        </td>
                        <td class="text-truncate">susanna.Lind57@gmail.com</td>
                        <td class="text-truncate">
                          <i class="mdi mdi-laptop mdi-24px text-danger me-1"></i> Admin
                        </td>
                        <td class="text-truncate">24</td>
                        <td class="text-truncate">34500$</td>
                        <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-sm me-3">
                              <img src="{{ asset('assets/img/avatars/3.png') }}" alt="Avatar" class="rounded-circle">
                            </div>
                            <div>
                              <h6 class="mb-0 text-truncate">Benedetto Rossiter</h6>
                              <small class="text-truncate">@brossiter15</small>
                            </div>
                          </div>
                        </td>
                        <td class="text-truncate">estelle.Bailey10@gmail.com</td>
                        <td class="text-truncate">
                          <i class="mdi mdi-pencil-outline text-info mdi-24px me-1"></i> Editor
                        </td>
                        <td class="text-truncate">29</td>
                        <td class="text-truncate">64500$</td>
                        <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-sm me-3">
                              <img src="{{ asset('assets/img/avatars/2.png') }}" alt="Avatar" class="rounded-circle">
                            </div>
                            <div>
                              <h6 class="mb-0 text-truncate">Bentlee Emblin</h6>
                              <small class="text-truncate">@bemblinf</small>
                            </div>
                          </div>
                        </td>
                        <td class="text-truncate">milo86@hotmail.com</td>
                        <td class="text-truncate">
                          <i class="mdi mdi-cog-outline text-warning mdi-24px me-1"></i> Author
                        </td>
                        <td class="text-truncate">44</td>
                        <td class="text-truncate">94500$</td>
                        <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-sm me-3">
                              <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar" class="rounded-circle">
                            </div>
                            <div>
                              <h6 class="mb-0 text-truncate">Bertha Biner</h6>
                              <small class="text-truncate">@bbinerh</small>
                            </div>
                          </div>
                        </td>
                        <td class="text-truncate">lonnie35@hotmail.com</td>
                        <td class="text-truncate">
                          <i class="mdi mdi-pencil-outline text-info mdi-24px me-1"></i> Editor
                        </td>
                        <td class="text-truncate">19</td>
                        <td class="text-truncate">4500$</td>
                        <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-sm me-3">
                              <img src="{{ asset('assets/img/avatars/4.png') }}" alt="Avatar" class="rounded-circle">
                            </div>
                            <div>
                              <h6 class="mb-0 text-truncate">Beverlie Krabbe</h6>
                              <small class="text-truncate">@bkrabbe1d</small>
                            </div>
                          </div>
                        </td>
                        <td class="text-truncate">ahmad_Collins@yahoo.com</td>
                        <td class="text-truncate">
                          <i class="mdi mdi-chart-donut mdi-24px text-success me-1"></i> Maintainer
                        </td>
                        <td class="text-truncate">22</td>
                        <td class="text-truncate">10500$</td>
                        <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-sm me-3">
                              <img src="{{ asset('assets/img/avatars/7.png') }}" alt="Avatar" class="rounded-circle">
                            </div>
                            <div>
                              <h6 class="mb-0 text-truncate">Bradan Rosebotham</h6>
                              <small class="text-truncate">@brosebothamz</small>
                            </div>
                          </div>
                        </td>
                        <td class="text-truncate">tillman.Gleason68@hotmail.com</td>
                        <td class="text-truncate">
                          <i class="mdi mdi-pencil-outline text-info mdi-24px me-1"></i> Editor
                        </td>
                        <td class="text-truncate">50</td>
                        <td class="text-truncate">99500$</td>
                        <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-sm me-3">
                              <img src="{{ asset('assets/img/avatars/6.png') }}" alt="Avatar" class="rounded-circle">
                            </div>
                            <div>
                              <h6 class="mb-0 text-truncate">Bree Kilday</h6>
                              <small class="text-truncate">@bkildayr</small>
                            </div>
                          </div>
                        </td>
                        <td class="text-truncate">otho21@gmail.com</td>
                        <td class="text-truncate">
                          <i class="mdi mdi-account-outline mdi-24px text-primary me-1"></i> Subscriber
                        </td>
                        <td class="text-truncate">23</td>
                        <td class="text-truncate">23500$</td>
                        <td><span class="badge bg-label-success rounded-pill">Active</span></td>
                      </tr>
                      <tr class="border-transparent">
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-sm me-3">
                              <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle">
                            </div>
                            <div>
                              <h6 class="mb-0 text-truncate">Breena Gallemore</h6>
                              <small class="text-truncate">@bgallemore6</small>
                            </div>
                          </div>
                        </td>
                        <td class="text-truncate">florencio.Little@hotmail.com</td>
                        <td class="text-truncate">
                          <i class="mdi mdi-account-outline mdi-24px text-primary me-1"></i> Subscriber
                        </td>
                        <td class="text-truncate">33</td>
                        <td class="text-truncate">20500$</td>
                        <td><span class="badge bg-label-secondary rounded-pill">Inactive</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!--/ Data Tables -->
          </div>
        </div>
        <!-- / Content -->

        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
          <div class="container-xxl">
            <div class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
              <div class="text-body mb-2 mb-md-0">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>2024
                , made with <span class="text-danger"><i class="tf-icons mdi mdi-heart"></i></span> by
                <a href="https://themeselection.com" target="_blank" class="footer-link fw-medium">ThemeSelection</a>
              </div>
              <div class="d-none d-lg-inline-block">
                <a href="https://themeselection.com/license/" class="footer-link me-3" target="_blank">License</a>
                <a href="https://themeselection.com/" target="_blank" class="footer-link me-3">More Themes</a>

                <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-3">Documentation</a>

                <a href="https://github.com/themeselection/materio-bootstrap-html-admin-template-free/issues" target="_blank" class="footer-link">Support</a>
              </div>
            </div>
          </div>
        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
      </div>


</x-app-layout>

