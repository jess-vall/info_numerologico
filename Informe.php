<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Informe Num.</title>
</head>

<body>

    <form method="POST" action="resultado.php">

        <section class="form-register">
            <label for=""><h1>Informe Numerológico - Jardín Reiki</h1></label>
            <hr>
            <br>
            <label for=""><h4>Escencia/Deseo del Alma</h4></label>
                <br>
                SI<input class="radios" type="radio" name="sinoDeal" value="si">
                NO<input class="radios" type="radio" name="sinoDeal" value="no" checked>
                <br>
                <select class="controls" name="deal" id="">
                        <option value=""></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="11">11</option>
                        <option value="22">22</option>
                        <option value="33">33</option>
                        <option value="44">44</option>
                </select> 

                <br>
                <br>

            <label for=""><h4>Imagen/Personalidad Externa</h4></label>
                <br>
                SI<input class="radios" type="radio" name="sinoPeex" value="si">
                NO<input class="radios" type="radio" name="sinoPeex" value="no" checked>
                <br>
                <select class="controls" name="peex" id="">
                        <option value=""></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="11">11</option>
                        <option value="22">22</option>
                        <option value="33">33</option>
                        <option value="44">44</option>
                </select>
                <br>
                <br>

            <label for=""><h4>Misión/Destino</h4></label>
                <br>
                SI<input class="radios" type="radio" name="sinoMide" value="si">
                NO<input class="radios" type="radio" name="sinoMide" value="no" checked>
                <br>
                <select class="controls" name="mide" id="">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="22">22</option>
                    <option value="33">33</option>
                    <option value="44">44</option>
                </select>
        
            <br>
            <br>

            <label for=""><h4>Arquetipo Numerológico</h4></label>
            <br>
                SI<input class="radios" type="radio" name="sinoArque" value="si">
                NO<input class="radios" type="radio" name="sinoArque" value="no" checked>
                <br>
                <select class="controls" name="arque" id="">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="11">11</option>
                    <option value="22">22</option>
                    <option value="33">33</option>
                    <option value="44">44</option>
                </select>

            <br>
            <br>
            <hr>
            <br>
            
            <label for=""><h4>Sobre la energía que vibra en tu nombre</h4></label>
            <br>
                SI<input class="radios" type="radio" name="sinoEvn" value="si">
                NO<input class="radios"  type="radio" name="sinoEvn" value="no"checked>
                <br>
                <label for=""><h4>Primer nombre</h4></label>
                <br>
                <input class="controls" type="text" name="pimerNombreEnv">
                <select class="controls" name="evn1" id="">
                    <option value=""></option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
                <br>
                <label for=""><h4>Segundo nombre</h4></label>
                <br>
                <input class="controls" type="text" name="segundoNombreEnv">
                <select class="controls" name="evn2" id="">
                    <option value=""></option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>

            <br>

            <label for=""><h4>Vocal del Nombre</h4></label>
            <br>
                <select class="controls" name="vono" id="">
                    <option value=""></option>
                    <option value="a">a</option>
                    <option value="e">e</option>
                    <option value="i">i</option>
                    <option value="o">o</option>
                    <option value="u">u</option>
                </select>

            <br>
            
            <label for=""><h4>Consonante del Nombre</h4></label>
            <br>
                <select class="controls" name="cono" id="">
                    <option value=""></option>
                    <option value="b">b</option>
                    <option value="c">c</option>
                    <option value="d">d</option>
                    <option value="f">f</option>
                    <option value="g">g</option>
                    <option value="h">h</option>
                    <option value="j">j</option>
                    <option value="k">k</option>
                    <option value="l">l</option>
                    <option value="m">m</option>
                    <option value="n">n</option>
                    <option value="ñ">ñ</option>
                    <option value="p">p</option>
                    <option value="q">q</option>
                    <option value="r">r</option>
                    <option value="s">s</option>
                    <option value="t">t</option>
                    <option value="v">v</option>
                    <option value="w">w</option>
                    <option value="x">x</option>
                    <option value="y">y</option>
                    <option value="z">z</option>
                </select>

            <br>
            
            <label for=""><h4>Vocal del Segundo Nombre</h4></label>
            <br>
                <select class="controls" name="voseno" id="">
                    <option value=""></option>
                    <option value="a">a</option>
                    <option value="e">e</option>
                    <option value="i">i</option>
                    <option value="o">o</option>
                    <option value="u">u</option>
                </select>

            <br>

            <label for=""><h4>Consonante del Segundo Nombre</h4></label>
            <br>
                <select class="controls" name="coseno" id="">
                    <option value=""></option>
                    <option value="b">b</option>
                    <option value="c">c</option>
                    <option value="d">d</option>
                    <option value="f">f</option>
                    <option value="g">g</option>
                    <option value="h">h</option>
                    <option value="j">j</option>
                    <option value="k">k</option>
                    <option value="l">l</option>
                    <option value="m">m</option>
                    <option value="n">n</option>
                    <option value="ñ">ñ</option>
                    <option value="p">p</option>
                    <option value="q">q</option>
                    <option value="r">r</option>
                    <option value="s">s</option>
                    <option value="t">t</option>
                    <option value="v">v</option>
                    <option value="w">w</option>
                    <option value="x">x</option>
                    <option value="y">y</option>
                    <option value="z">z</option>
                </select>
            <br>
            <br>
            <hr>
            <br>

            <label for=""><h4>Lecciones Kármicas</h4></label>
            <br>
                SI<input class="radios" type="radio" name="sinoLeka" value="si">
                NO<input class="radios"  type="radio" name="sinoLeka" value="no"checked>
            <br>
            <select class="controls" name="leka" id="">
                        <option value=""></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="11">11</option>
                        <option value="22">22</option>
                        <option value="33">33</option>
                        <option value="44">44</option>
                </select>
            
            <br>
                                            <!--Número kármicoNúmero kármico
                                                Número kármicoNúmero kármico -->
            <br>
            <label for=""><h4>Número kármico</h4></label>
            <br>
            Encabezado<input type="checkbox" class="check" name="siNuka" value="siNuka">
            No<input type="checkbox" class="check" name="noNuka" value="noNuka">
            
            13<input type="checkbox" class="check" name="13Nuka" value="13Nuka">
            14<input type="checkbox" class="check" name="14Nuka" value="14Nuka">
            16<input type="checkbox" class="check" name="16Nuka" value="16Nuka">
            19<input type="checkbox" class="check" name="19Nuka" value="19Nuka">
            <br>
            <br>
            <label for=""><h4>Número Problemático</h4></label>
            <br>
            Encabezado<input type="checkbox" class="check" name="siProblematico" value="siProblematico">
            No<input type="checkbox" class="check" name="noProblematico" value="noProblematico">
            12<input type="checkbox" class="check" name="12Problematico" value="12Problematico">
            15<input type="checkbox" class="check" name="15Problematico" value="15Problematico">
            
            <br>            
            <br>
            <hr>
            <br>
                <label for=""><h4>Planos de existencia</h4></label>
                <br>
                SI<input class="radios" type="radio" name="sinoPla" value="si">
                NO<input class="radios" type="radio" name="sinoPla" value="no"checked>
            <br>            
            <label for=""><b>Plano Mental</b></label>
            <select class="controls" name="planoMental" id="">
                <option value=""></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>
            
            <br>

            <label for=""><b>Plano Físico</b></label>
            <select class="controls" name="planoFisico" id="">
                <option value=""></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>

            <br>
            
            <label for=""><b>Plano Emocional</b></label>
            <select class="controls" name="planoEmocional" id="">
                <option value=""></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>

            <br>

            <label for=""><b>Plano Espiritual</b></label>
            <select class="controls" name="planoEspiritual" id="">
                <option value=""></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>
        
            <br>
            <br>
            <hr>
            <br>

                <label for=""><h4>Día de nacimiento y su influencia</h4></label>
                <br>
                SI<input class="radios" type="radio" name="sinoDia" value="si">
                NO<input class="radios" type="radio" name="sinoDia" value="no" checked>  
            <br>
            <select class="controls" name="diaNac" id="">
                        <option value=""></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                </select>

        

                                                               
            <br>
            <br>
            <hr>
            <br>
            
            <label for=""><h4>Número de madurez</h4></label>
                <br>
                SI<input class="radios" type="radio" name="sinoMadu" value="si">
                NO<input class="radios" type="radio" name="sinoMadu" value="no" checked>  
                <br>
                <select class="controls" name="madu" id="">
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="11">11</option>
                <option value="22">22</option>
            </select>

            <br>
            <br>
            <hr>
            <br>

            <label for=""><h4>Clave personal</h4></label>
                <br>
                SI<input class="radios" type="radio" name="sinoCla" value="si">
                NO<input class="radios" type="radio" name="sinoCla" value="no" checked>  
                <br>
                <select class="controls" name="clavePer" id="">
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="22">12</option>
                <option value="33">13</option>
            </select>

            <br>
            <br>
            <hr>
            <br>

            <label for=""><h4>Número oculto</h4></label>
                <br>
                <select class="controls" name="numOcu" id="">
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
            </select>

            <br>
            <br>
            <hr>
            <br>
                                            <!--Números en Equilibrio
                                                Números en Exceso
                                                Números en Carencia -->

                <label for=""><h4>Números en Equilibrio</h4></label>
            <br>
            <input type="checkbox" class="check" name="siEqui" value="siEqui">Encabezado
            <input type="checkbox" class="check" name="1Equi" value="1Equi">1
            <input type="checkbox" class="check" name="2Equi" value="2Equi">2
            <input type="checkbox" class="check" name="3Equi" value="3Equi">3
            <input type="checkbox" class="check" name="4Equi" value="4Equi">4
            <input type="checkbox" class="check" name="5Equi" value="5Equi">5
            <input type="checkbox" class="check" name="6Equi" value="6Equi">6
            <input type="checkbox" class="check" name="7Equi" value="7Equi">7
            <input type="checkbox" class="check" name="8Equi" value="8Equi">8
            <input type="checkbox" class="check" name="9Equi" value="9Equi">9
            <input type="checkbox" class="check" name="noEqui" value="noEqui">NO

            <br>
            <br>
            <hr>
            <br>
                <label for=""><h4>Números en Exceso</h4></label>
            <br>
            <input type="checkbox" class="check" name="siExce" value="siExce">Encabezado
            <input type="checkbox" class="check" name="1Exce" value="1Exce">1
            <input type="checkbox" class="check" name="2Exce" value="2Exce">2
            <input type="checkbox" class="check" name="3Exce" value="3Exce">3
            <input type="checkbox" class="check" name="4Exce" value="4Exce">4
            <input type="checkbox" class="check" name="5Exce" value="5Exce">5
            <input type="checkbox" class="check" name="6Exce" value="6Exce">6
            <input type="checkbox" class="check" name="7Exce" value="7Exce">7
            <input type="checkbox" class="check" name="8Exce" value="8Exce">8
            <input type="checkbox" class="check" name="9Exce" value="9Exce">9
            <input type="checkbox" class="check" name="noExce" value="noExce">NO

            <br>
            <br>
            <hr>
            <br>
                <label for=""><h4>Números en Carencia</h4></label>
            <br>
            <input type="checkbox" class="check" name="siCare" value="siCare">Encabezado
            <input type="checkbox" class="check" name="1Care" value="1Care">1
            <input type="checkbox" class="check" name="2Care" value="2Care">2
            <input type="checkbox" class="check" name="3Care" value="3Care">3
            <input type="checkbox" class="check" name="4Care" value="4Care">4
            <input type="checkbox" class="check" name="5Care" value="5Care">5
            <input type="checkbox" class="check" name="6Care" value="6Care">6
            <input type="checkbox" class="check" name="7Care" value="7Care">7
            <input type="checkbox" class="check" name="8Care" value="8Care">8
            <input type="checkbox" class="check" name="9Care" value="9Care">9
            <input type="checkbox" class="check" name="noCare" value="noCare">NO

            <br>
            <br>
            <hr>
            <br>

            <label for=""><h4>----- INFORME PREDICTIVO -----</h4></label>
            <br>
            <input class="radios" type="radio" name="siInfoPre" value="si">Si
            <input class="radios" type="radio" name="noInfoPre" value="no" checked>No

            <br>
            <br>
            <hr>
            <br>

            <label for=""><h4>----- PINÁCULOS -----</h4></label>
            <br>
            <input class="radios" type="radio" name="sinoPina" value="si">Si
            <input class="radios" type="radio" name="sinoPina" value="no" checked>No

            <label for=""><h4>Día</h4></label>
            <br>
            <select class="controls" name="pinaDia" id="">
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>

            <label for=""><h4>Mes</h4></label>
            <br>
            <select class="controls" name="pinaMes" id="">
                <option value=""></option>
                <option value="1">Enero</option>
                <option value="2">Febrero</option>
                <option value="3">Marzo</option>
                <option value="4">Abril</option>
                <option value="5">Mayo</option>
                <option value="6">Junio</option>
                <option value="7">Julio</option>
                <option value="8">Agosto</option>
                <option value="9">Septiembre</option>
                <option value="10">Octubre</option>
                <option value="11">Noviembre</option>
                <option value="12">Diciembre</option>
            </select>

            <label for=""><h4>Año</h4></label>
            <br>
            <input class="controls" type="number" name="pinaAño">
                
                 


                                                        <!-- BOTON ENVIAR  -->
                                                        <!-- BOTON ENVIAR  -->

            <p>
                <button class="botonReset" type="reset">Reset</button> <input class="botonEnviar" type="submit" name="calcular" value="Enviar" />       
            </p>
        
        </section>

    </form>

    <footer class="footer">
        <p>Formulario Numerología - Jardín Reiki - <b>Jesica Vallasciani</b> -Numeróloga Holística</p>
        <p>Desarrollado por H83?</p>
    </footer>


</body>
</html>