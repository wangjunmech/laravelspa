<template>
    <div class="container"><div class="row justify-content-center">    <div class="col-md-12">        <div class="card">            <div class="card-header">Periodic Table of Elements <a href="https://pubchem.ncbi.nlm.nih.gov/periodic-table/#property=GroupBlock">英文参考</a>&nbsp; <a href="https://www.zdic.net/ts/fulu/yuansu/">中文参考</a></div>
    <div class="card-body">
    <div class="p-md-top p-xl-bottom">

<!-- ****************************************************             -->
    <table class="minimal width-100 align-center fixed-layout f-1">
        <thead>
                <tr>
                    <td colspan="18">
                        <h2>Periodic table of Elements</h2>  

                    </td>
                </tr>
            </thead>   
        <tbody>
    <tr>
    <td>
        <div class="element align-center border b-white" @click="speak($event)">
            <div class="bckg-white">
                <button class="button width-100 block lh-1" title="Hydrogen">
                    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 255, 0, 0.2), rgba(255, 255, 0, 0.3));">
        <div class="f-lh-15 f-075">1</div>
        <div class="f-125 f-medium">H</div>
        <div class="f-0625 f-lh-15 ellipsis">Hydrogen</div>
        <div class="ellipsis f-0625 f-lh-15 long"><span class="capitalized">nonmetal</span></div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    &nbsp;</td>
    <td rowspan="3" colspan="10">
    </td>
        <td rowspan="1" colspan="5">

    </td>
    <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 152, 0, 0.2), rgba(255, 152, 0, 0.3));">
        <div class="f-lh-15 f-075">2</div>
        <div class="f-125 f-medium">He</div>
        <div class="f-0625 f-lh-15 ellipsis">Helium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">noble gas</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    </tr>
    <tr>
            <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 0, 0, 0.2), rgba(255, 0, 0, 0.25));">
        <div class="f-lh-15 f-075">3</div>
        <div class="f-125 f-medium">Li</div>
        <div class="f-0625 f-lh-15 ellipsis">Lithium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">alkali metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(64, 64, 255, 0.2), rgba(64, 64, 255, 0.25)">
        <div class="f-lh-15 f-075">4</div>
        <div class="f-125 f-medium">Be</div>
        <div class="f-0625 f-lh-15 ellipsis">Beryllium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">alkaline earth metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(140, 190, 0, 0.2), rgba(140, 190, 0, 0.3)">
        <div class="f-lh-15 f-075">5</div>
        <div class="f-125 f-medium">B</div>
        <div class="f-0625 f-lh-15 ellipsis">Boron</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">metalloid</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 255, 0, 0.2), rgba(255, 255, 0, 0.3)">
        <div class="f-lh-15 f-075">6</div>
        <div class="f-125 f-medium">C</div>
        <div class="f-0625 f-lh-15 ellipsis">Carbon</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">nonmetal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 255, 0, 0.2), rgba(255, 255, 0, 0.3)">
        <div class="f-lh-15 f-075">7</div>
        <div class="f-125 f-medium">N</div>
        <div class="f-0625 f-lh-15 ellipsis">Nitrogen</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">nonmetal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 255, 0, 0.2), rgba(255, 255, 0, 0.3)">
        <div class="f-lh-15 f-075">8</div>
        <div class="f-125 f-medium">O</div>
        <div class="f-0625 f-lh-15 ellipsis">Oxygen</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">nonmetal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 255, 0, 0.2), rgba(255, 255, 0, 0.3)">
        <div class="f-lh-15 f-075">9</div>
        <div class="f-125 f-medium">F</div>
        <div class="f-0625 f-lh-15 ellipsis">Fluorine</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">halogen</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 152, 0, 0.2), rgba(255, 152, 0, 0.3)">
        <div class="f-lh-15 f-075">10</div>
        <div class="f-125 f-medium">Ne</div>
        <div class="f-0625 f-lh-15 ellipsis">Neon</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">noble gas</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    </tr>
        <tr>
            <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 0, 0, 0.2), rgba(255, 0, 0, 0.25)">
        <div class="f-lh-15 f-075">11</div>
        <div class="f-125 f-medium">Na</div>
        <div class="f-0625 f-lh-15 ellipsis">Sodium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">alkali metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(64, 64, 255, 0.2), rgba(64, 64, 255, 0.25)">
        <div class="f-lh-15 f-075">12</div>
        <div class="f-125 f-medium">Mg</div>
        <div class="f-0625 f-lh-15 ellipsis">Magnesium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">alkaline earth metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 0, 0.2), rgba(0, 255, 0, 0.3)">
        <div class="f-lh-15 f-075">13</div>
        <div class="f-125 f-medium">Al</div>
        <div class="f-0625 f-lh-15 ellipsis">Aluminum</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">post-transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(140, 190, 0, 0.2), rgba(140, 190, 0, 0.3)">
        <div class="f-lh-15 f-075">14</div>
        <div class="f-125 f-medium">Si</div>
        <div class="f-0625 f-lh-15 ellipsis">Silicon</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">metalloid</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 255, 0, 0.2), rgba(255, 255, 0, 0.3)">
        <div class="f-lh-15 f-075">15</div>
        <div class="f-125 f-medium">P</div>
        <div class="f-0625 f-lh-15 ellipsis">Phosphorus</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">nonmetal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 255, 0, 0.2), rgba(255, 255, 0, 0.3)">
        <div class="f-lh-15 f-075">16</div>
        <div class="f-125 f-medium">S</div>
        <div class="f-0625 f-lh-15 ellipsis">Sulfur</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">nonmetal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 255, 0, 0.2), rgba(255, 255, 0, 0.3)">
        <div class="f-lh-15 f-075">17</div>
        <div class="f-125 f-medium">Cl</div>
        <div class="f-0625 f-lh-15 ellipsis">Chlorine</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">halogen</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 152, 0, 0.2), rgba(255, 152, 0, 0.3)">
        <div class="f-lh-15 f-075">18</div>
        <div class="f-125 f-medium">Ar</div>
        <div class="f-0625 f-lh-15 ellipsis">Argon</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">noble gas</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    </tr>
        <tr>
            <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 0, 0, 0.2), rgba(255, 0, 0, 0.25)">
        <div class="f-lh-15 f-075">19</div>
        <div class="f-125 f-medium">K</div>
        <div class="f-0625 f-lh-15 ellipsis">Potassium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">alkali metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(64, 64, 255, 0.2), rgba(64, 64, 255, 0.25)">
        <div class="f-lh-15 f-075">20</div>
        <div class="f-125 f-medium">Ca</div>
        <div class="f-0625 f-lh-15 ellipsis">Calcium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">alkaline earth metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">21</div>
        <div class="f-125 f-medium">Sc</div>
        <div class="f-0625 f-lh-15 ellipsis">Scandium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">22</div>
        <div class="f-125 f-medium">Ti</div>
        <div class="f-0625 f-lh-15 ellipsis">Titanium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">23</div>
        <div class="f-125 f-medium">V</div>
        <div class="f-0625 f-lh-15 ellipsis">Vanadium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">24</div>
        <div class="f-125 f-medium">Cr</div>
        <div class="f-0625 f-lh-15 ellipsis">Chromium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">25</div>
        <div class="f-125 f-medium">Mn</div>
        <div class="f-0625 f-lh-15 ellipsis">Manganese</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">26</div>
        <div class="f-125 f-medium">Fe</div>
        <div class="f-0625 f-lh-15 ellipsis">Iron</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">27</div>
        <div class="f-125 f-medium">Co</div>
        <div class="f-0625 f-lh-15 ellipsis">Cobalt</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">28</div>
        <div class="f-125 f-medium">Ni</div>
        <div class="f-0625 f-lh-15 ellipsis">Nickel</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">29</div>
        <div class="f-125 f-medium">Cu</div>
        <div class="f-0625 f-lh-15 ellipsis">Copper</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">30</div>
        <div class="f-125 f-medium">Zn</div>
        <div class="f-0625 f-lh-15 ellipsis">Zinc</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 0, 0.2), rgba(0, 255, 0, 0.3)">
        <div class="f-lh-15 f-075">31</div>
        <div class="f-125 f-medium">Ga</div>
        <div class="f-0625 f-lh-15 ellipsis">Gallium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">post-transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(140, 190, 0, 0.2), rgba(140, 190, 0, 0.3)">
        <div class="f-lh-15 f-075">32</div>
        <div class="f-125 f-medium">Ge</div>
        <div class="f-0625 f-lh-15 ellipsis">Germanium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">metalloid</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(140, 190, 0, 0.2), rgba(140, 190, 0, 0.3)">
        <div class="f-lh-15 f-075">33</div>
        <div class="f-125 f-medium">As</div>
        <div class="f-0625 f-lh-15 ellipsis">Arsenic</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">metalloid</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 255, 0, 0.2), rgba(255, 255, 0, 0.3)">
        <div class="f-lh-15 f-075">34</div>
        <div class="f-125 f-medium">Se</div>
        <div class="f-0625 f-lh-15 ellipsis">Selenium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">nonmetal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 255, 0, 0.2), rgba(255, 255, 0, 0.3)">
        <div class="f-lh-15 f-075">35</div>
        <div class="f-125 f-medium">Br</div>
        <div class="f-0625 f-lh-15 ellipsis">Bromine</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">halogen</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 152, 0, 0.2), rgba(255, 152, 0, 0.3)">
        <div class="f-lh-15 f-075">36</div>
        <div class="f-125 f-medium">Kr</div>
        <div class="f-0625 f-lh-15 ellipsis">Krypton</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">noble gas</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    </tr>
        <tr>
            <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 0, 0, 0.2), rgba(255, 0, 0, 0.25)">
        <div class="f-lh-15 f-075">37</div>
        <div class="f-125 f-medium">Rb</div>
        <div class="f-0625 f-lh-15 ellipsis">Rubidium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">alkali metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(64, 64, 255, 0.2), rgba(64, 64, 255, 0.25)">
        <div class="f-lh-15 f-075">38</div>
        <div class="f-125 f-medium">Sr</div>
        <div class="f-0625 f-lh-15 ellipsis">Strontium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">alkaline earth metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">39</div>
        <div class="f-125 f-medium">Y</div>
        <div class="f-0625 f-lh-15 ellipsis">Yttrium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">40</div>
        <div class="f-125 f-medium">Zr</div>
        <div class="f-0625 f-lh-15 ellipsis">Zirconium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">41</div>
        <div class="f-125 f-medium">Nb</div>
        <div class="f-0625 f-lh-15 ellipsis">Niobium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">42</div>
        <div class="f-125 f-medium">Mo</div>
        <div class="f-0625 f-lh-15 ellipsis">Molybdenum</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">43</div>
        <div class="f-125 f-medium">Tc</div>
        <div class="f-0625 f-lh-15 ellipsis">Technetium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">44</div>
        <div class="f-125 f-medium">Ru</div>
        <div class="f-0625 f-lh-15 ellipsis">Ruthenium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">45</div>
        <div class="f-125 f-medium">Rh</div>
        <div class="f-0625 f-lh-15 ellipsis">Rhodium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">46</div>
        <div class="f-125 f-medium">Pd</div>
        <div class="f-0625 f-lh-15 ellipsis">Palladium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">47</div>
        <div class="f-125 f-medium">Ag</div>
        <div class="f-0625 f-lh-15 ellipsis">Silver</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">48</div>
        <div class="f-125 f-medium">Cd</div>
        <div class="f-0625 f-lh-15 ellipsis">Cadmium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 0, 0.2), rgba(0, 255, 0, 0.3)">
        <div class="f-lh-15 f-075">49</div>
        <div class="f-125 f-medium">In</div>
        <div class="f-0625 f-lh-15 ellipsis">Indium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">post-transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 0, 0.2), rgba(0, 255, 0, 0.3)">
        <div class="f-lh-15 f-075">50</div>
        <div class="f-125 f-medium">Sn</div>
        <div class="f-0625 f-lh-15 ellipsis">Tin</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">post-transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(140, 190, 0, 0.2), rgba(140, 190, 0, 0.3)">
        <div class="f-lh-15 f-075">51</div>
        <div class="f-125 f-medium">Sb</div>
        <div class="f-0625 f-lh-15 ellipsis">Antimony</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">metalloid</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(140, 190, 0, 0.2), rgba(140, 190, 0, 0.3)">
        <div class="f-lh-15 f-075">52</div>
        <div class="f-125 f-medium">Te</div>
        <div class="f-0625 f-lh-15 ellipsis">Tellurium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">metalloid</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 255, 0, 0.2), rgba(255, 255, 0, 0.3)">
        <div class="f-lh-15 f-075">53</div>
        <div class="f-125 f-medium">I</div>
        <div class="f-0625 f-lh-15 ellipsis">Iodine</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">halogen</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 152, 0, 0.2), rgba(255, 152, 0, 0.3)">
        <div class="f-lh-15 f-075">54</div>
        <div class="f-125 f-medium">Xe</div>
        <div class="f-0625 f-lh-15 ellipsis">Xenon</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">noble gas</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    </tr>
        <tr>
            <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 0, 0, 0.2), rgba(255, 0, 0, 0.25)">
        <div class="f-lh-15 f-075">55</div>
        <div class="f-125 f-medium">Cs</div>
        <div class="f-0625 f-lh-15 ellipsis">Cesium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">alkali metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(64, 64, 255, 0.2), rgba(64, 64, 255, 0.25)">
        <div class="f-lh-15 f-075">56</div>
        <div class="f-125 f-medium">Ba</div>
        <div class="f-0625 f-lh-15 ellipsis">Barium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">alkaline earth metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td rowspan="1" colspan="1">    <div class="inactive p-sm-left p-sm-right">*</div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">72</div>
        <div class="f-125 f-medium">Hf</div>
        <div class="f-0625 f-lh-15 ellipsis">Hafnium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">73</div>
        <div class="f-125 f-medium">Ta</div>
        <div class="f-0625 f-lh-15 ellipsis">Tantalum</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">74</div>
        <div class="f-125 f-medium">W</div>
        <div class="f-0625 f-lh-15 ellipsis">Tungsten</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">75</div>
        <div class="f-125 f-medium">Re</div>
        <div class="f-0625 f-lh-15 ellipsis">Rhenium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">76</div>
        <div class="f-125 f-medium">Os</div>
        <div class="f-0625 f-lh-15 ellipsis">Osmium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">77</div>
        <div class="f-125 f-medium">Ir</div>
        <div class="f-0625 f-lh-15 ellipsis">Iridium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">78</div>
        <div class="f-125 f-medium">Pt</div>
        <div class="f-0625 f-lh-15 ellipsis">Platinum</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">79</div>
        <div class="f-125 f-medium">Au</div>
        <div class="f-0625 f-lh-15 ellipsis">Gold</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">80</div>
        <div class="f-125 f-medium">Hg</div>
        <div class="f-0625 f-lh-15 ellipsis">Mercury</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 0, 0.2), rgba(0, 255, 0, 0.3)">
        <div class="f-lh-15 f-075">81</div>
        <div class="f-125 f-medium">Tl</div>
        <div class="f-0625 f-lh-15 ellipsis">Thallium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">post-transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 0, 0.2), rgba(0, 255, 0, 0.3)">
        <div class="f-lh-15 f-075">82</div>
        <div class="f-125 f-medium">Pb</div>
        <div class="f-0625 f-lh-15 ellipsis">Lead</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">post-transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 0, 0.2), rgba(0, 255, 0, 0.3)">
        <div class="f-lh-15 f-075">83</div>
        <div class="f-125 f-medium">Bi</div>
        <div class="f-0625 f-lh-15 ellipsis">Bismuth</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">post-transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(140, 190, 0, 0.2), rgba(140, 190, 0, 0.3)">
        <div class="f-lh-15 f-075">84</div>
        <div class="f-125 f-medium">Po</div>
        <div class="f-0625 f-lh-15 ellipsis">Polonium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">metalloid</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 255, 0, 0.2), rgba(255, 255, 0, 0.3)">
        <div class="f-lh-15 f-075">85</div>
        <div class="f-125 f-medium">At</div>
        <div class="f-0625 f-lh-15 ellipsis">Astatine</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">halogen</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 152, 0, 0.2), rgba(255, 152, 0, 0.3)">
        <div class="f-lh-15 f-075">86</div>
        <div class="f-125 f-medium">Rn</div>
        <div class="f-0625 f-lh-15 ellipsis">Radon</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">noble gas</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    </tr>
        <tr>
            <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 0, 0, 0.2), rgba(255, 0, 0, 0.25)">
        <div class="f-lh-15 f-075">87</div>
        <div class="f-125 f-medium">Fr</div>
        <div class="f-0625 f-lh-15 ellipsis">Francium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">alkali metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(64, 64, 255, 0.2), rgba(64, 64, 255, 0.25)">
        <div class="f-lh-15 f-075">88</div>
        <div class="f-125 f-medium">Ra</div>
        <div class="f-0625 f-lh-15 ellipsis">Radium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">alkaline earth metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
        <td rowspan="1" colspan="1">    <div class="inactive p-sm-left p-sm-right">**</div>
    </td>
        <td>
            <div class="element align-center border b-white" @click="speak($event)">
                <div class="bckg-white">
                    <button class="button width-100 block lh-1" title="">
                        <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3)">
        <div class="f-lh-15 f-075">104</div>
        <div class="f-125 f-medium">Rf</div>
        <div class="f-0625 f-lh-15 ellipsis">Rutherfordium</div>
        <div class="ellipsis f-0625 f-lh-15 long">    <span class="capitalized">transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3))">
    <div class="f-lh-15 f-075">
    105</div>
    <div class="f-125 f-medium">
    Db</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Dubnium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3))">
    <div class="f-lh-15 f-075">
    106</div>
    <div class="f-125 f-medium">
    Sg</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Seaborgium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3))">
    <div class="f-lh-15 f-075">
    107</div>
    <div class="f-125 f-medium">
    Bh</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Bohrium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3))">
    <div class="f-lh-15 f-075">
    108</div>
    <div class="f-125 f-medium">
    Hs</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Hassium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3))">
    <div class="f-lh-15 f-075">
    109</div>
    <div class="f-125 f-medium">
    Mt</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Meitnerium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3))">
    <div class="f-lh-15 f-075">
    110</div>
    <div class="f-125 f-medium">
    Ds</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Darmstadtium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3))">
    <div class="f-lh-15 f-075">
    111</div>
    <div class="f-125 f-medium">
    Rg</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Roentgenium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 128, 255, 0.2), rgba(0, 128, 255, 0.3))">
    <div class="f-lh-15 f-075">
    112</div>
    <div class="f-125 f-medium">
    Cn</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Copernicium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 0, 0.2), rgba(0, 255, 0, 0.3))">
    <div class="f-lh-15 f-075">
    113</div>
    <div class="f-125 f-medium">
    Nh</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Nihonium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    post-transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 0, 0.2), rgba(0, 255, 0, 0.3))">
    <div class="f-lh-15 f-075">
    114</div>
    <div class="f-125 f-medium">
    Fl</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Flerovium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    post-transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 0, 0.2), rgba(0, 255, 0, 0.3))">
    <div class="f-lh-15 f-075">
    115</div>
    <div class="f-125 f-medium">
    Mc</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Moscovium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    post-transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 0, 0.2), rgba(0, 255, 0, 0.3))">
    <div class="f-lh-15 f-075">
    116</div>
    <div class="f-125 f-medium">
    Lv</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Livermorium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    post-transition metal</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 255, 0, 0.2), rgba(255, 255, 0, 0.3))">
    <div class="f-lh-15 f-075">
    117</div>
    <div class="f-125 f-medium">
    Ts</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Tennessine</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    halogen</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(255, 152, 0, 0.2), rgba(255, 152, 0, 0.3))">
    <div class="f-lh-15 f-075">
    118</div>
    <div class="f-125 f-medium">
    Og</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Oganesson</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    noble gas</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    </tr>
    <tr>
    <td rowspan="1" colspan="18">
    <div class=" p-sm">
    </div>
    </td>
    </tr>
    <tr>
    <td rowspan="2" colspan="2">
    <div class="align-right p-sm">
    </div>
    </td>
    <td rowspan="1" colspan="1">
    <div class="align-right p-sm-left p-sm-right">
    *</div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 255, 0.25), rgba(0, 255, 255, 0.35))">
    <div class="f-lh-15 f-075">
    57</div>
    <div class="f-125 f-medium">
    La</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Lanthanum</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    lanthanide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 255, 0.25), rgba(0, 255, 255, 0.35))">
    <div class="f-lh-15 f-075">
    58</div>
    <div class="f-125 f-medium">
    Ce</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Cerium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    lanthanide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 255, 0.25), rgba(0, 255, 255, 0.35))">
    <div class="f-lh-15 f-075">
    59</div>
    <div class="f-125 f-medium">
    Pr</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Praseodymium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    lanthanide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 255, 0.25), rgba(0, 255, 255, 0.35))">
    <div class="f-lh-15 f-075">
    60</div>
    <div class="f-125 f-medium">
    Nd</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Neodymium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    lanthanide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 255, 0.25), rgba(0, 255, 255, 0.35))">
    <div class="f-lh-15 f-075">
    61</div>
    <div class="f-125 f-medium">
    Pm</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Promethium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    lanthanide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 255, 0.25), rgba(0, 255, 255, 0.35))">
    <div class="f-lh-15 f-075">
    62</div>
    <div class="f-125 f-medium">
    Sm</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Samarium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    lanthanide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 255, 0.25), rgba(0, 255, 255, 0.35))">
    <div class="f-lh-15 f-075">
    63</div>
    <div class="f-125 f-medium">
    Eu</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Europium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    lanthanide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 255, 0.25), rgba(0, 255, 255, 0.35))">
    <div class="f-lh-15 f-075">
    64</div>
    <div class="f-125 f-medium">
    Gd</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Gadolinium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    lanthanide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 255, 0.25), rgba(0, 255, 255, 0.35))">
    <div class="f-lh-15 f-075">
    65</div>
    <div class="f-125 f-medium">
    Tb</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Terbium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    lanthanide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 255, 0.25), rgba(0, 255, 255, 0.35))">
    <div class="f-lh-15 f-075">
    66</div>
    <div class="f-125 f-medium">
    Dy</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Dysprosium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    lanthanide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 255, 0.25), rgba(0, 255, 255, 0.35))">
    <div class="f-lh-15 f-075">
    67</div>
    <div class="f-125 f-medium">
    Ho</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Holmium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    lanthanide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 255, 0.25), rgba(0, 255, 255, 0.35))">
    <div class="f-lh-15 f-075">
    68</div>
    <div class="f-125 f-medium">
    Er</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Erbium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    lanthanide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 255, 0.25), rgba(0, 255, 255, 0.35))">
    <div class="f-lh-15 f-075">
    69</div>
    <div class="f-125 f-medium">
    Tm</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Thulium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    lanthanide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 255, 0.25), rgba(0, 255, 255, 0.35))">
    <div class="f-lh-15 f-075">
    70</div>
    <div class="f-125 f-medium">
    Yb</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Ytterbium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    lanthanide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(0, 255, 255, 0.25), rgba(0, 255, 255, 0.35))">
    <div class="f-lh-15 f-075">
    71</div>
    <div class="f-125 f-medium">
    Lu</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Lutetium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    lanthanide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    </tr>
    <tr>
    <td rowspan="1" colspan="1">
    <div class="align-right p-sm-left p-sm-right">
    **</div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(64, 255, 192, 0.25), rgba(64, 255, 192, 0.35))">
    <div class="f-lh-15 f-075">
    89</div>
    <div class="f-125 f-medium">
    Ac</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Actinium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    actinide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(64, 255, 192, 0.25), rgba(64, 255, 192, 0.35))">
    <div class="f-lh-15 f-075">
    90</div>
    <div class="f-125 f-medium">
    Th</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Thorium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    actinide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(64, 255, 192, 0.25), rgba(64, 255, 192, 0.35))">
    <div class="f-lh-15 f-075">
    91</div>
    <div class="f-125 f-medium">
    Pa</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Protactinium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    actinide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(64, 255, 192, 0.25), rgba(64, 255, 192, 0.35))">
    <div class="f-lh-15 f-075">
    92</div>
    <div class="f-125 f-medium">
    U</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Uranium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    actinide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(64, 255, 192, 0.25), rgba(64, 255, 192, 0.35))">
    <div class="f-lh-15 f-075">
    93</div>
    <div class="f-125 f-medium">
    Np</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Neptunium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    actinide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(64, 255, 192, 0.25), rgba(64, 255, 192, 0.35))">
    <div class="f-lh-15 f-075">
    94</div>
    <div class="f-125 f-medium">
    Pu</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Plutonium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    actinide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(64, 255, 192, 0.25), rgba(64, 255, 192, 0.35))">
    <div class="f-lh-15 f-075">
    95</div>
    <div class="f-125 f-medium">
    Am</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Americium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    actinide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(64, 255, 192, 0.25), rgba(64, 255, 192, 0.35))">
    <div class="f-lh-15 f-075">
    96</div>
    <div class="f-125 f-medium">
    Cm</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Curium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    actinide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(64, 255, 192, 0.25), rgba(64, 255, 192, 0.35))">
    <div class="f-lh-15 f-075">
    97</div>
    <div class="f-125 f-medium">
    Bk</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Berkelium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    actinide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(64, 255, 192, 0.25), rgba(64, 255, 192, 0.35))">
    <div class="f-lh-15 f-075">
    98</div>
    <div class="f-125 f-medium">
    Cf</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Californium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    actinide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(64, 255, 192, 0.25), rgba(64, 255, 192, 0.35))">
    <div class="f-lh-15 f-075">
    99</div>
    <div class="f-125 f-medium">
    Es</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Einsteinium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    actinide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(64, 255, 192, 0.25), rgba(64, 255, 192, 0.35))">
    <div class="f-lh-15 f-075">
    100</div>
    <div class="f-125 f-medium">
    Fm</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Fermium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    actinide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(64, 255, 192, 0.25), rgba(64, 255, 192, 0.35))">
    <div class="f-lh-15 f-075">
    101</div>
    <div class="f-125 f-medium">
    Md</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Mendelevium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    actinide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(64, 255, 192, 0.25), rgba(64, 255, 192, 0.35))">
    <div class="f-lh-15 f-075">
    102</div>
    <div class="f-125 f-medium">
    No</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Nobelium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    actinide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    <td>
    <div class="element align-center border b-white" @click="speak($event)">

<div class="bckg-white">
    <button class="button width-100 block lh-1" title="">
    <div class="f-base block p-xsm-top p-xsm-bottom no-hover-underline" style="background: linear-gradient(110deg, rgba(64, 255, 192, 0.25), rgba(64, 255, 192, 0.35))">
    <div class="f-lh-15 f-075">
    103</div>
    <div class="f-125 f-medium">
    Lr</div>
    <div class="f-0625 f-lh-15 ellipsis">
    Lawrencium</div>
    <div class="ellipsis f-0625 f-lh-15 long">
    <span class="capitalized">
    actinide</span>
    </div>
    </div>
    </button>
    </div>
    </div>
    </td>
    </tr>
    </tbody>
    </table>



    </div>
<!-- **************************************************************************** -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data(){
            return {
                imgurl:'/logos/404.jpg'
            }
        },
        methods: {
            speak(e){
                // var word=e.getElementsByClassName('f-0625');
                // console.log(e.originalTarget.innerText);
                // console.log(e.originalTarget.parentNode.className);//点击元素会有不同
                // console.log(e.target.tagName=='DIV');//点击元素会有不同,判断点击的是div还是span
                // alert('ss');
                var node,word,wordlink;
                if(e.target.tagName=='DIV'){
                    node=e.originalTarget.parentNode;
                }else{
                    node=e.originalTarget.parentNode.parentNode;
                }
                // console.log(node.getElementsByClassName('f-0625')[0].textContent);
                word = node.getElementsByClassName('f-0625')[0].textContent;
                word = word.trim();
                // 百度翻译发音API
                // https://fanyi.baidu.com/gettts?lan=uk&text=tes&spd=3&source=web
                wordlink = 'https://fanyi.baidu.com/gettts?lan=uk&text='+word+'&spd=3&source=web';
                        
      

                var soundlink = "/checkfile?path=sounds/elements/"+word+".mp3";//后台地址检查资源是否存在？？


                        //     // Ajax检查文件是否存在，如果不存在再传到后台去处理
                        axios.get(soundlink)
                                .then(
                                    (response)=>{ 
                                        console.log('response**************');
                                        console.log(response);
                                        if(response.data!=1){
                                            // alert('请求的音频文件不存在!')
                                            window.open ('autoClose.html?w='+word,'newwindow','height=100,width=1200,top=0,left=0,toolbar=no,menubar=no,scrollbars=no,resizable=no,location=no,status=no');
                                            }else{
                                            // alert('请求的音频文件OK')
                                            }                                    
                                    }
                                    )
                                .catch(err=>console.log(err));


                                // swalt.fire({
                                // //   icon: 'success',
                                // //   title: 'Users loaded successfully!'
                                // // })

                                //         });

                // /*创建一个a标签来模拟点击试试*/
                // var adiv = document.createElement("a");
                //     adiv.setAttribute("href",wordlink);//给创建的标签设置属性值；
                //     adiv.setAttribute("target",'_blank');//给创建的标签设置属性值；
                //     adiv.click();
                // /*创建一个a标签来模拟点击试试*/


                // var adiv = document.createElement("a");
                //     adiv.setAttribute("href",'/WebSpider?w='+word);//给创建的标签设置属性值；
                //     adiv.setAttribute("target",'_blank');//给创建的标签设置属性值；
                    // adiv.click(); 

                    //播放声音
                    let audio = new Audio()
                    alert(word);
                    audio.src = "sounds/elements/"+word+".mp3";
                    // alert(audio.src);

                    // audio.src = "sounds/elements/Dubnium.mp3";
                    // audio.src = word+".mp3";
                    audio.play(); 


            }

        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style scoped="scoped">
    table{font-size:.875em;width:100%;border:0;border-collapse:collapse;border-spacing:0;text-align:left;line-height:1.15}
    table td,table th{padding:.5em .75em;border:0;border-bottom:solid 1px #f1f1f1}
    table td a,table th a{word-break:normal;word-wrap:normal;overflow-wrap:normal}
    table th{color:#5b616b;text-align:left}
    table thead th{font-weight:700;border-top:solid 1px #f1f1f1;padding-top:1em;padding-bottom:1em}
    figure{margin:0}
    img[src*="imagefly.cgi"],img[src*="imgsrv.fcgi"]{-webkit-filter:contrast(1.1);filter:contrast(1.1)}
    .label,label{text-transform:uppercase;font-weight:400;font-size:.875em}
    address{font-style:normal}
    .main-width{width:100%;max-width:2000px;min-width:300px;padding:0 50px;margin-left:auto;margin-right:auto;position:relative;overflow:visible}
    @media screen and (max-width:600px){.main-width{padding:0 15px}
    }
    @media screen and (min-width:1200px){.main-width{padding:0 100px}
    }
    @media print{.main-width{padding:0 15px}
    }
    @media print{footer,header,main{background-color:#fff!important;border:0!important}
    }
    #root{position:relative}
    .welcome{font-family:cursive;position:absolute;width:100%;text-align:center;top:1em;color:#5b616b}
    @media print{.print-hidden{display:none!important}
    .print-avoid-break-inside{-webkit-column-break-inside:avoid;page-break-inside:avoid;break-inside:avoid}
    .print-padding-top{padding-top:2em}
    .print-page-break-after{page-break-after:always!important}
    .logo-container{padding:0!important}
    #root>
.flex-container-vertical{min-height:auto;display:block;-webkit-box-orient:unset;-webkit-box-direction:unset;-ms-flex-direction:unset;flex-direction:unset}
    }
    .print-log{display:none}
    .alert{background-color:#f4e3db;text-align:left}
    .alert p{margin:.25em 0}
    .alert a{text-decoration:underline}
    .alert .alert-links-list li{padding:.25em 1em .25em 0}
    @media screen and (max-width:800px){.alert p{margin:.5em 0}
    .alert .alert-icon{display:none}
    .alert .alert-links-list li{padding:.5em 1em .5em 0}
    }
    @media screen and (max-width:540px){.alert p{margin:.5em 0}
    .alert .alert-icon{display:none}
    .alert .alert-links-list li{display:block;padding:.5em 0}
    }
    .align-left{text-align:left!important}
    .align-right{text-align:right!important}
    .align-center{text-align:center!important}
    .align-top{vertical-align:top!important}
    .align-middle{vertical-align:middle!important}
    .align-bottom{vertical-align:bottom!important}
    svg{vertical-align:middle}
    .block-centered{margin:0 auto}
    .block-right{margin:0 0 0 auto}
    .block-left{margin:0 auto 0 0}
    @-webkit-keyframes FADE-OUT{0%{opacity:1}
    100%{opacity:0}
    }
    @-moz-keyframes FADE-OUT{0%{opacity:1}
    100%{opacity:0}
    }
    @-o-keyframes FADE-OUT{0%{opacity:1}
    100%{opacity:0}
    }
    @-webkit-keyframes FADE-IN{0%{opacity:0}
    100%{opacity:1}
    }
    @-moz-keyframes FADE-IN{0%{opacity:0}
    100%{opacity:1}
    }
    @-o-keyframes FADE-IN{0%{opacity:0}
    100%{opacity:1}
    }
    @-moz-keyframes FADE-OUT{0%{opacity:1}
    100%{opacity:0}
    }
    @-webkit-keyframes FADE-OUT{0%{opacity:1}
    100%{opacity:0}
    }
    @-o-keyframes FADE-OUT{0%{opacity:1}
    100%{opacity:0}
    }
    @keyframes FADE-OUT{0%{opacity:1}
    100%{opacity:0}
    }
    @-moz-keyframes FADE-IN{0%{opacity:0}
    100%{opacity:1}
    }
    @-webkit-keyframes FADE-IN{0%{opacity:0}
    100%{opacity:1}
    }
    @-o-keyframes FADE-IN{0%{opacity:0}
    100%{opacity:1}
    }
    @keyframes FADE-IN{0%{opacity:0}
    100%{opacity:1}
    }

    div.horizontal-separator{margin:1em auto;height:4px;background-color:#5b616b}
    a,button{cursor:pointer}
    a.button,a.minimal,button.button,button.minimal{display:inline-block;color:#5b616b;border-image:none;border-radius:2px;border-width:0;border-style:solid;border-color:transparent;appearance:none;-webkit-appearance:none;-moz-appearance:none;margin:0;padding:0;line-height:2em;white-space:nowrap;font-weight:500;background:0 0}
    a.button svg,a.minimal svg,button.button svg,button.minimal svg{vertical-align:middle;fill:#7b8088}
    a.button svg .show-fill,a.minimal svg .show-fill,button.button svg .show-fill,button.minimal svg .show-fill{fill:#5b616b}
    a.button svg .show-stroke,a.minimal svg .show-stroke,button.button svg .show-stroke,button.minimal svg .show-stroke{stroke:#5b616b}
    a.button span,a.minimal span,button.button span,button.minimal span{display:inline-block;vertical-align:middle}
    a.button:hover,a.minimal:hover,button.button:hover,button.minimal:hover{color:#323a45;text-decoration:none}
    a.button:hover svg,a.minimal:hover svg,button.button:hover svg,button.minimal:hover svg{fill:#323a45}
    a.button:hover svg .show-stroke,a.minimal:hover svg .show-stroke,button.button:hover svg .show-stroke,button.minimal:hover svg .show-stroke{stroke:#323a45}
    a.button:focus,a.minimal:focus,button.button:focus,button.minimal:focus{outline-style:dotted;outline-width:2px;outline-color:#d6d7d9}
    a.button:disabled:not(.no-disabled-style),a.minimal:disabled:not(.no-disabled-style),button.button:disabled:not(.no-disabled-style),button.minimal:disabled:not(.no-disabled-style){color:#aeb0b5}
    a.button:disabled:not(.no-disabled-style):hover,a.minimal:disabled:not(.no-disabled-style):hover,button.button:disabled:not(.no-disabled-style):hover,button.minimal:disabled:not(.no-disabled-style):hover{color:#aeb0b5}
    a.button:disabled:not(.no-disabled-style):hover svg,a.minimal:disabled:not(.no-disabled-style):hover svg,button.button:disabled:not(.no-disabled-style):hover svg,button.minimal:disabled:not(.no-disabled-style):hover svg{fill:#aeb0b5}
    a.button:disabled:not(.no-disabled-style):hover svg .show-stroke,a.minimal:disabled:not(.no-disabled-style):hover svg .show-stroke,button.button:disabled:not(.no-disabled-style):hover svg .show-stroke,button.minimal:disabled:not(.no-disabled-style):hover svg .show-stroke{stroke:#aeb0b5}
    a.button:disabled:not(.no-disabled-style) svg,a.minimal:disabled:not(.no-disabled-style) svg,button.button:disabled:not(.no-disabled-style) svg,button.minimal:disabled:not(.no-disabled-style) svg{fill:#aeb0b5}
    a.button:disabled:not(.no-disabled-style) svg .show-stroke,a.minimal:disabled:not(.no-disabled-style) svg .show-stroke,button.button:disabled:not(.no-disabled-style) svg .show-stroke,button.minimal:disabled:not(.no-disabled-style) svg .show-stroke{stroke:#aeb0b5}
    a.button.round-icon,a.minimal.round-icon,button.button.round-icon,button.minimal.round-icon{border-radius:50%;line-height:1;padding:.5em;border:solid 1px transparent}
    a.button.round-icon:focus,a.minimal.round-icon:focus,button.button.round-icon:focus,button.minimal.round-icon:focus{outline:0;box-shadow:inset 0 0 0 1px rgba(0,0,0,.25)}
    a.button.square-icon,a.minimal.square-icon,button.button.square-icon,button.minimal.square-icon{line-height:1;padding:.5em}
    a.button.lh-1,a.minimal.lh-1,button.button.lh-1,button.minimal.lh-1{line-height:1}
    a.button.lh-15,a.minimal.lh-15,button.button.lh-15,button.minimal.lh-15{line-height:1.5}
    a.button.lh-25,a.minimal.lh-25,button.button.lh-25,button.minimal.lh-25{line-height:2.5}
    a.button.lh-3,a.minimal.lh-3,button.button.lh-3,button.minimal.lh-3{line-height:3}
    a.button.light-font,a.minimal.light-font,button.button.light-font,button.minimal.light-font{font-weight:400}
    a.button.has-icon-left .btn-text,a.minimal.has-icon-left .btn-text,button.button.has-icon-left .btn-text,button.minimal.has-icon-left .btn-text{padding-left:.25em}
    a.button.has-icon-right .btn-text,a.minimal.has-icon-right .btn-text,button.button.has-icon-right .btn-text,button.minimal.has-icon-right .btn-text{padding-right:.25em}
    a.button.has-icon-top,a.minimal.has-icon-top,button.button.has-icon-top,button.minimal.has-icon-top{text-align:center}
    a.button.has-icon-top .btn-text,a.minimal.has-icon-top .btn-text,button.button.has-icon-top .btn-text,button.minimal.has-icon-top .btn-text{display:block}
    a.button.with-padding,a.minimal.with-padding,button.button.with-padding,button.minimal.with-padding{padding:0 1em}
    a.button.with-padding.has-icon-top,a.minimal.with-padding.has-icon-top,button.button.with-padding.has-icon-top,button.minimal.with-padding.has-icon-top{padding-top:1em;padding-bottom:.5em}
    a.button.with-padding-small,a.minimal.with-padding-small,button.button.with-padding-small,button.minimal.with-padding-small{padding:0 .5em}
    a.button.with-border,a.minimal.with-border,button.button.with-border,button.minimal.with-border{border:solid 1px #d6d7d9}
    a.button.with-border-transparent,a.minimal.with-border-transparent,button.button.with-border-transparent,button.minimal.with-border-transparent{border:solid 1px rgba(214,215,217,.5)}
    a.button.with-border-dark,a.minimal.with-border-dark,button.button.with-border-dark,button.minimal.with-border-dark{border:solid 1px #5b616b}
    a.button.with-bckg,a.minimal.with-bckg,button.button.with-bckg,button.minimal.with-bckg{background:#f1f1f1}
    a.button.wrap-normal .btn-text,a.minimal.wrap-normal .btn-text,button.button.wrap-normal .btn-text,button.minimal.wrap-normal .btn-text{line-height:1.15;white-space:normal;text-align:left}
    .columns{display:-ms-flexbox;display:-webkit-flex;display:flex;-webkit-flex-flow:wrap column;flex-flow:wrap column;max-height:230px;overflow-y:hidden}
    .columns>
*{padding-right:1em}
    .columns>
p{padding-left:1em;line-height:1.15!important}
    .inline{display:inline}
    .inline-block{display:inline-block}
    .block{display:block}
    .hidden{display:none}
    @media screen and (max-width:600px){.sm-screen-hidden{display:none!important}
    }
    .flex-container{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}
    .flex-container.align-vertical-center{-webkit-box-align:center;-ms-flex-align:center;align-items:center}
    .flex-container.align-top{-webkit-box-align:top;-ms-flex-align:top;align-items:top}
    .flex-container.align-baseline{align-items:baseline}
    .flex-container.align-bottom{align-items:flex-end}
    .flex-container.space-between{-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}
    .flex-container.space-around{-ms-flex-pack:distribute;justify-content:space-around}
    .flex-container.centered{justify-content:center}
    .flex-container.flex-nowrap{-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap}
    .flex-container.space-after-each>
*{padding-right:1em}
    .flex-item{white-space:nowrap;text-overflow:ellipsis;overflow:hidden;max-width:16em}
    .flex-item.full-width{max-width:100%}
    .flex-grow-1{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1}
    .flex-container-vertical{min-height:100vh;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}
    .float-right{float:right}
    .f-white{color:#fff}
    .f-white svg{fill:#fff}
    .f-white svg .show-stroke{stroke:#fff}
    .f-white .button,.f-white a,.f-white a:visited{color:#fff}
    .f-white .button svg,.f-white a svg,.f-white a:visited svg{fill:#fff}
    .f-white .button svg .show-stroke,.f-white a svg .show-stroke,.f-white a:visited svg .show-stroke{stroke:#fff}
    .f-white .button:hover,.f-white a:hover,.f-white a:visited:hover{color:#dce4ef}
    .f-white .button:hover svg,.f-white a:hover svg,.f-white a:visited:hover svg{fill:#dce4ef}
    .f-white .button:hover svg .show-stroke,.f-white a:hover svg .show-stroke,.f-white a:visited:hover svg .show-stroke{stroke:#dce4ef}
    .button.f-white{color:#fff}
    .button.f-white svg{fill:#fff}
    .button.f-white:hover{color:#dce4ef}
    .button.f-white:hover svg{fill:#dce4ef}
    .f-white>
svg{fill:#fff!important}
    .f-white>
svg .show-stroke{stroke:#fff!important}
    .f-base{color:#212121}
    .f-base svg{fill:#212121}
    .f-base .button,.f-base a,.f-base a:visited{color:#212121}
    .f-base .button svg,.f-base a svg,.f-base a:visited svg{fill:#212121}
    .f-base .button:hover,.f-base a:hover,.f-base a:visited:hover{color:#323a45}
    .f-base .button:hover svg,.f-base a:hover svg,.f-base a:visited:hover svg{fill:#323a45}
    .f-gray{color:#5b616b}
    .f-gray svg{fill:#7b8088!important}
    .f-gray-light{color:#aeb0b5}
    .f-gray-light svg{fill:#aeb0b5}
    .f-gray-light .button,.f-gray-light a,.f-gray-light a:visited{color:#aeb0b5}
    .f-gray-light .button svg,.f-gray-light a svg,.f-gray-light a:visited svg{fill:#aeb0b5}
    .f-gray-light .button:hover,.f-gray-light a:hover,.f-gray-light a:visited:hover{color:#fff}
    .f-gray-light .button:hover svg,.f-gray-light a:hover svg,.f-gray-light a:visited:hover svg{fill:#fff}
    .f-gray-lighter{color:#d6d7d9}
    .f-gray-lighter svg{fill:#d6d7d9!important}
    .f-gray-lighter .button,.f-gray-lighter a,.f-gray-lighter a:visited{color:#d6d7d9}
    .f-gray-lighter .button svg,.f-gray-lighter a svg,.f-gray-lighter a:visited svg{fill:#d6d7d9!important}
    .f-gray-lighter .button:hover,.f-gray-lighter a:hover,.f-gray-lighter a:visited:hover{color:#fff}
    .f-gray-lighter .button:hover svg,.f-gray-lighter a:hover svg,.f-gray-lighter a:visited:hover svg{fill:#fff!important}
    .f-green{color:#2e8540}
    .f-green svg{fill:#2e8540}
    .f-green .button,.f-green a,.f-green a:visited{color:#2e8540}
    .f-green .button svg,.f-green a svg,.f-green a:visited svg{fill:#2e8540}
    .f-green .button:hover,.f-green a:hover,.f-green a:visited:hover{color:#1b4f26}
    .f-green .button:hover svg,.f-green a:hover svg,.f-green a:visited:hover svg{fill:#1b4f26}
    .f-primary{color:#0071bc}
    .f-secondary{color:#e31c3d}
    .f-secondary-dark{color:#cd2026}
    .f-primary-alt-light{color:#9bdaf1}
    .f-primary-alt-lightest{color:#e1f3f8}
    .f-lh-1{line-height:1}
    .f-lh-115{line-height:1.15}
    .f-lh-135{line-height:1.35}
    .f-lh-15{line-height:1.5}
    .f-lh-175{line-height:1.75}
    .f-lh-2{line-height:2}
    .f-lh-25{line-height:2.5}
    .f-lh-3{line-height:3}
    .f-1rem{font-size:1rem}
    .f-3{font-size:3em}
    .f-4{font-size:4em}
    .f-6{font-size:6em}
    .f-2{font-size:2em}
    .f-25{font-size:2.5em}
    .f-175{font-size:1.75em}
    .f-15{font-size:1.5em}
    .f-125{font-size:1.25em}
    .f-135{font-size:1.35em}
    .f-1125{font-size:1.125em}
    .f-11{font-size:1.1em}
    .f-10625{font-size:1.0625em}
    .f-1{font-size:1em}
    .f-0875{font-size:.875em}
    .f-08125{font-size:.8125em}
    .f-0775{font-size:.775em}
    .f-076{font-size:.76em}
    .f-075{font-size:.75em}
    .f-0625{font-size:.625em}
    .f-05{font-size:.5em}
    .f-lh-1{line-height:1}
    .f-lh-115{line-height:1.15}
    .f-lh-15{line-height:1.5}
    .italic{font-style:italic}
    .capitalized{
        font-size: 8px;
    }
    
    .m-zero{margin:0}
    body.has-modal{overflow:hidden}
    body.has-modal.has-scroll-width{padding-right:17px}
    body.has-modal.has-scroll-width .sticky-bar{padding-right:17px}
    .scrollbar-placeholder{position:fixed;top:0;right:0;bottom:0;left:0;z-index:9997;height:100%;width:100%;overflow-y:scroll}
    .is-widget .scrollbar-placeholder{display:none}
    .overlay{position:fixed;top:0;right:0;bottom:0;left:0;display:flex;align-items:center;justify-content:center;z-index:9998;height:100%;width:100%;background-color:rgba(0,0,0,.5)}
    .overlay.align-top{align-items:self-start}
    .modal{position:relative;z-index:9999;width:100%;width:calc(100% - 2em);max-width:1000px;min-width:300px;background-color:#fff;box-shadow:0 2px 2px 0 rgba(0,0,0,.16),0 0 0 1px rgba(0,0,0,.08)}
    .overlay.align-top .modal{margin-top:1em}
    .modal-scrollable{max-height:100%;max-height:calc(100vh - 2em);overflow-y:auto}
    .overlay.align-top .modal-scrollable{max-height:80vh}
    is-widget .overlay.align-top .modal-scrollable{max-height:100%;max-height:calc(100vh - 2em)}
    .modal-title{z-index:10;background-color:#fff;height:3em;width:100%;position:absolute;top:0;left:0;text-align:left}
    .modal-body{padding-top:3em;padding-bottom:1em}
    .modal.filters-container .modal-title{border-bottom:solid 1px #d6d7d9}
    .modal.filters-container .modal-body{padding-top:4em}
    .modal.sketcher-container{background-color:#ddd}
    .modal.sketcher-container .modal-title{background-color:#ddd}
    .modal-transition-enter .overlay{opacity:0}
    .modal-transition-enter-active .overlay{opacity:1;transition:opacity 120ms}
    .modal-transition-exit-active .overlay{opacity:1}
    .modal-transition-exit-active .overlay{opacity:0;transition:opacity 120ms}
    .modal-transition-enter .modal,.modal-transition-enter .modal-title{opacity:0;transform:scale(.95) translateY(-30px)}
    .modal-transition-enter-active .modal,.modal-transition-enter-active .modal-title{opacity:1;transform:translateX(0) translateY(0);transition:opacity 120ms,transform 120ms}
    .modal-transition-exit .modal{opacity:1}
    .modal-transition-exit .modal-title{opacity:0;background-color:transparent}
    .modal-transition-exit-active .modal{opacity:0;transform:scale(.95) translateY(-30px);transition:opacity .2s,transform .2s}
    .modal-transition-exit-active .modal-title{opacity:0;background-color:transparent}
    .opacity-025{opacity:.25}
    .opacity-05{opacity:.5}
    .opacity-0{opacity:0}
    .opacity-1{opacity:1}
    .opacity-09{opacity:.9}
    .p-zero{padding:0}
    .p-1px{padding:1px}
    .p-3px{padding:3px}
    .p-xsm{padding:.25em}
    .p-sm{padding:.5em}
    .p-smm{padding:.75em}
    .p-md{padding:1em}
    .p-l{padding:2em}
    .p-xl{padding:3em}
    .p-sm-rectangle{padding:.25em .5em}
    .p-md-rectangle{padding:.5em 1em}
    .p-md-top{padding-top:1em}
    .p-md-bottom{padding-bottom:1em}
    @media print{.p-md-bottom{padding-bottom:.5em}
    }
    .p-md-left{padding-left:1em}
    .p-md-right{padding-right:1em}
    .p-sm-top{padding-top:.5em}
    .p-sm-bottom{padding-bottom:.5em}
    .p-sm-left{padding-left:.5em}
    .p-sm-right{padding-right:.5em}
    .p-smm-top{padding-top:.75em}
    .p-smm-bottom{padding-bottom:.75em}
    .p-smm-left{padding-left:.75em}
    .p-smm-right{padding-right:.75em}
    .p-ml-top{padding-top:1.5em}
    .p-l-top{padding-top:2em}
    .p-l-bottom{padding-bottom:2em}
    @media print{.p-l-bottom{padding-bottom:.5em}
    }
    .p-l-left{padding-left:2em}
    .p-l-right{padding-right:2em}
    .p-xl-top{padding-top:3em}
    @media print{.p-xl-top{padding-bottom:.5em}
    }
    .p-xl-bottom{padding-bottom:3em}
    @media print{.p-xl-bottom{padding-bottom:.5em}
    }
    .p-xl-left{padding-left:3em}
    .p-xl-right{padding-right:3em}
    .p-xsm-top{padding-top:.25em}
    .p-xsm-bottom{padding-bottom:.25em}
    .p-xsm-left{padding-left:.25em}
    .p-xsm-right{padding-right:.25em}
    .p-5vh-top{padding-top:5vh}
    .p-5vh-bottom{padding-bottom:5vh}
    .p-md025-vert{padding-top:1.25em;padding-bottom:1.25em}
    ::-webkit-input-placeholder{color:#5b616b;font-weight:400}
    ::-moz-placeholder{color:#5b616b;font-weight:400}
    :-ms-input-placeholder{color:#5b616b;font-weight:400}
    :-moz-placeholder{color:#5b616b;font-weight:400}
    .relative{position:relative}
    .absolute{position:absolute}
    .fixed{position:fixed}
    .sticky{position:sticky}
    .top-0{top:0}
    .bottom-0{bottom:0}
    .left-0{left:0}
    .right-0{right:0}
    .top-2vh{top:-2vh}
    .top-100{top:99.5%}
    .top-2point25em{top:2.25em}
    .top-xsm{top:.25em}
    .right-xsm{right:.25em}
    .centered-element{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%)}
    .centered-tooltip{position:absolute;top:calc(100% + .5em);left:50%;transform:translateX(-50%);width:calc(100% + 1.5em)}
    .box-shadow{box-shadow:0 2px 2px 0 rgba(0,0,0,.16),0 0 0 1px rgba(0,0,0,.08)}
    .box-shadow.with-transition{transition:box-shadow .2s cubic-bezier(.4,0,.2,1)}
    .box-shadow.with-transition:hover{box-shadow:0 3px 3px 0 rgba(0,0,0,.32),0 0 0 1px rgba(0,0,0,.16)}
    .bottom-shadow{-webkit-box-shadow:0 8px 6px -6px rgba(174,176,181,.5);-moz-box-shadow:0 8px 6px -6px rgba(174,176,181,.5);box-shadow:0 8px 6px -6px rgba(174,176,181,.5)}
    .box-shadow-inset{box-shadow:inset 0 0 0 1px rgba(0,0,0,.15)}
    .sr-only{position:absolute;left:-10000px;top:auto;width:1px;height:1px;overflow:hidden}
    .table-grid{display:table;border-collapse:collapse}
    .table-grid>
*{display:table-cell;vertical-align:middle}
    .table-grid.align-top>
*{vertical-align:top}
    .table-grid.align-bottom>
*{vertical-align:bottom}
    .table-grid.full-width{width:100%}
    .table-grid.fixed-layout{table-layout:fixed}
    .table-grid.centered{margin-left:auto;margin-right:auto}
    .table-grid.with-separator>
*{border-right:solid 1px #d6d7d9}
    .table-grid.with-separator>
:last-of-type{border-right:0}
    .table-grid.with-padding>
*{padding-left:.25em;padding-right:.25em}
    .table-grid.with-padding>
:first-of-type{padding-left:0}
    .table-grid.with-padding>
:last-of-type{padding-right:0}
    table.minimal{border-collapse:collapse;border-spacing:0}
    table.minimal td,table.minimal th{padding:0;border:0}
    table.f-1{font-size:1em}
    table.align-top td,table.align-top th{vertical-align:top}
    table.align-middle td,table.align-middle th{vertical-align:middle}
    table.fixed-layout{table-layout:fixed}
    table.no-border td,table.no-border th{border:0!important}
    table.with-padding-small th{padding:.5em}
    table.with-padding-small td{padding:.25em .5em}
    table.with-border td,table.with-border th{border:solid 1px #f1f1f1}
    table.with-border-gray td,table.with-border-gray th{border-color:#d6d7d9}
    table.with-row-border tr{border-bottom:solid 1px #f1f1f1}
    .border table thead tr:first-child th{border-top:0}
    .border table tbody tr:last-child td,.border table tbody tr:last-child th{border-bottom:0}
    .border table.with-row-border tr:last-child{border-bottom:0}
    table.no-border-last-row tbody tr:last-child td,table.no-border-last-row tbody tr:last-child th{border-bottom:0!important}
    table.no-border-last-row.with-row-border tr:last-child{border-bottom:0!important}
    .t-shadow-black{text-shadow:0 0 3px #000,-1px -1px #000,1px 1px #000}
    .t-shadow-white{text-shadow:0 0 3px #fff,-1px -1px #fff,1px 1px #fff}
    .width-auto{width:auto}
    .width-25{width:25%}
    .width-50{width:50%}
    .width-65{width:65%}
    .width-70{width:70%}
    .width-75{width:75%}
    .width-90{width:90%}
    .width-100{width:100%}
    .max-width-100{max-width:100%}
    .max-width-1000px{max-width:1000px}
    .min-width-100{min-width:100%}
    .width-5em{width:5em}
    .width-8em{width:8em}
    .width-10em{width:10em}
    .width-12em{width:12em}
    .width-15em{width:15em;max-width:100%!important}
    .width-20em{width:20em;max-width:100%!important}
    .width-25em{width:25em;max-width:100%!important}
    .width-35em{width:35em;max-width:100%!important}
    .width-2em{width:2em}
    .width-1em{width:1em}
    .width-1point5em{width:1.5em}
    .min-width-5em{min-width:5em}
    .min-width-10em{min-width:10em}
    .min-width-12em{min-width:12em}
    .min-width-15em{min-width:15em}
    .min-width-20em{min-width:20em}
    .max-width-15em{max-width:15em}
    .nowrap{white-space:nowrap}
    .ellipsis{max-width:100%;text-overflow:ellipsis;white-space:nowrap;overflow:hidden}
    @media print{.ellipsis{overflow:visible;text-overflow:revert}
    }
    .breakword{word-break:break-word;word-wrap:break-word;overflow-wrap:break-word}
    .flow-root{display:flow-root}
    .wrap-normal{white-space:normal}
    .z-index-1{z-index:1}
    .z-index-10{z-index:10}
    .z-index-20{z-index:20}
    .z-index-100{z-index:100}
    .z-index-500{z-index:500}
    .z-index-1000{z-index:1000}
    .z-index-10001{z-index:10001}
    .z-index-10002{z-index:10002}
    a.button.logo svg .show-stroke{stroke:#08d4aa}
    .f-active{color:#08d4aa}
    .bckg-active{background:rgba(8,212,170,.1)!important}
    .bckg-active-strong{background:linear-gradient(rgba(8,212,170,.25),rgba(8,212,170,.35))!important}
    .bckg-active-stronger{background:linear-gradient(rgba(8,212,170,.4),rgba(8,212,170,.45))!important}
    .bckg-active-strongest{background:#08d4aa!important}
    .b-active{border-color:#08d4aa}
    .with-active-overlay-border{position:relative}
    .with-active-overlay-border a,.with-active-overlay-border button{outline:0}
    .with-active-overlay-border>
:not(.absolute){position:relative}
    .with-active-overlay-border::before{content:" ";display:block;height:100%;position:absolute;top:0;left:0;width:100%;border:solid 4px #08d4aa}
    .b-overlay-light.with-active-overlay-border::before{border-width:0 0 0 3px}
    .box-shadow-inset-active{box-shadow:inset 0 0 0 1px rgba(8,212,170,.85)}
    @media print{header{display:none}
    }
    @media print{h1{font-size:5em!important;text-align:center;text-transform:uppercase}
    }
    @media print{.ellipsis.long{font-size:.45em;overflow:visible}
    }
    .game-card{animation-duration:2s;animation-name:bounceIn}
    .score-notice{-webkit-animation:FADE-OUT 2s 0s forwards 1;-moz-animation:FADE-OUT 2s 0s forwards 1;-o-animation:FADE-OUT 2s 0s forwards 1;animation:FADE-OUT 2s 0s forwards 1}
    .modal.element-card{max-width:500px}
    .modal.element-card.is-compact .modal-title{border-bottom:solid 1px #d6d7d9}
    .element-container{padding-left:0}
    .property-container{padding-right:0}
    @media print{.element .f-lh-15.f-075{font-size:.875em;font-weight:700}
    }
    @media print{.element .f-125.f-medium{font-size:1.75em;font-weight:700;padding-bottom:.1em}
    }
    @media print{.element-legend .f-125{font-size:1.75em;font-weight:700;padding-bottom:.1em}
    }
    .ptable-logo-splash{display:none}
    @media print{.ptable-logo-splash{display:block}
    }
    @-moz-keyframes bounceIn{0%{transform:scale(.1);opacity:0}
    60%{transform:scale(1.2);opacity:1}
    100%{transform:scale(1)}
    }
    @-webkit-keyframes bounceIn{0%{transform:scale(.1);opacity:0}
    60%{transform:scale(1.2);opacity:1}
    100%{transform:scale(1)}
    }
    @-o-keyframes bounceIn{0%{transform:scale(.1);opacity:0}
    60%{transform:scale(1.2);opacity:1}
    100%{transform:scale(1)}
    }
    @keyframes bounceIn{0%{transform:scale(.1);opacity:0}
    60%{transform:scale(1.2);opacity:1}
    100%{transform:scale(1)}
    }

/****************/
.elementscn{
    font-size: 10px;
    color: red;
}



    </style>