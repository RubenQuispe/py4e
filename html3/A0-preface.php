<?php if ( file_exists("../booktop.php") ) {
  require_once "../booktop.php";
  ob_start();
}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <meta name="generator" content="pandoc" />
  <title></title>
  <style type="text/css">code{white-space: pre;}</style>
</head>
<body>
<p></p>
<h2 id="créditos">Créditos</h2>
<pre><code>Soporte Editorial: Elliott Hauser, Sue Blumenberg
Diseño de portada: Aimee Andrion</code></pre>
<h2 id="historial-de-impresión">Historial de impresión</h2>
<ul>
<li>05-Jul-2016 Primera versión completa de Python 3.0</li>
<li>20-Dic-2015 Borrador inicial de conversión a Python 3.0</li>
</ul>
<h2 id="detalles-de-copyright">Detalles de Copyright</h2>
<p>Copyright ~2009- Charles Severance.</p>
<p>Este trabajo está registrado bajo una Licencia Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License. Este licencia está disponible en</p>
<p>http://creativecommons.org/licenses/by-nc-sa/3.0/</p>
<p>Puedes ver lo que el autor considera usos comerciales y no-comerciales de este material, así como las exenciones de licencia en el Apéndice titulado &quot;Detalles de Copyright&quot;.</p>
<p></p>
<h1 id="prólogo">Prólogo</h1>
<h2 id="remezclando-un-libro-libre">Remezclando un Libro Libre</h2>
<p>Se suele decir de los académicos deben &quot;publicar o perecer&quot; continuamente, de modo que es bastante normal que siempre quieran empezar algo desde cero, para que sea su propia y flamante creación. Este libro es un experimento, ya que no parte desde cero, sino que en vez de eso &quot;remezcla&quot; el libro titulado <em>Think Python: How to Think Like a Computer Scientist</em> (Piensa en Python: Cómo pensar como un científico de la computación), escrito por Allen B. Bowney, Jeff Elkner, y otros.</p>
<p>En Diciembre de 2009, yo me estaba preparando para enseñar <em>SI502 - Programación en Red</em> en la Universidad de Michigan por quinto semestre consecutivo, y decidí que ya era hora de escribir un libro de texto sobre Python que se centrase en la exploración de datos en lugar de en explicar algoritmos y abstracciones. Mi objetivo en SI502 es enseñar a la gente habilidades permanentes para el manejo de datos usando Python. Pocos de mis estudiantes pretenden llegar a ser programadores de computadoras profesionales. En vez de eso, quieren ser bibliotecarios, gerentes, abogados, biólogos, economistas, etc., que tal vez quieran aplicar el uso de la tecnología en sus respectivos campos.</p>
<p>Parecía que no podría encontrar el libro perfecto para mi curso, que estuviera orientado al manejo de datos en Python, de modo que decidí empezar a escribirlo por mi mismo. Por suerte, en una reunión de profesores tres semanas antes de las vacaciones, que era la fecha en que tenía planeado empezar a escribir mi libro desde cero, el Dr. Atul Prakash me mostró el libro <em>Think Python</em> (Piensa en Python), que él había utilizado para impartir su curso de Python ese semestre. Se trata de un texto de Ciencias de la Computación bien escrito, con un enfoque breve, explicaciones directas y fácil de aprender.</p>
<p>La estructura principal del libro se ha cambiado, para empezar a realizar problemas de análisis de datos lo antes posible, y para tener una serie de ejemplos funcionales y de ejercicios sobre el análisis de datos desde el principio.</p>
<p>Los capítulos 2-10 son similares a los del libro <em>Think Python</em>, pero ha habido cambios importantes. Los ejemplos orientados a números y los ejercicios se han reemplazado por otros orientados a datos. Los temas se presentan en el orden necesario para ir creando soluciones de análisis de datos cuya complejidad aumente progresivamente. Algunos temas como <code>try</code> y <code>except</code> (manejo de excepciones) se han adelantado, y se presentan como parte del capítulo de los condicionales. Las funciones se tratan muy por encima hasta que son necesarias para manejar programas complejos, en lugar de introducirlas como abstracción en las primeras lecciones. Casi todas las funciones definidas por el usuario se han eliminado del código de los ejemplos y de los ejercicios excepto en el capítulo 4. La palabra &quot;recursión&quot;<a href="#fn1" class="footnoteRef" id="fnref1"><sup>1</sup></a> no aparece en todo el libro.</p>
<p>Todo el contenido del capítulo 1 y del 11 al 16 es nuevo, centrado en aplicaciones para el mundo real y en ejemplos simples del uso de Python para el análisis de datos, incluyendo expresiones regulares para búsqueda y análisis, automatización de tareas en la computadora, descarga de datos a través de la red, escaneo de páginas web para recuperar datos, programación orientada a objetos, uso de servicios web, análisis de datos en formato XML y JSON, creación y uso de bases de datos usando el Lenguaje de Consultas Estructurado (SQL), y la visualización de datos.</p>
<p>El objetivo final de todos estos cambios es variar la orientación, desde una dirigida a las Ciencias de la Computación hacia otra puramente informática, que trate sólo temas adecuados para una clase de tecnología para principiantes, que puedan resultarles útiles incluso si eligen no ser programadores profesionales.</p>
<p>Los estudiantes que encuentren este libro interesante y quieran ir más allá, deberían echar un vistazo al libro <em>Think Python</em> de Allen B. Downey's. Como ambos libros comparten un montón de materia, los estudiantes adquirirán rápidamente habilidades en las áreas adicionales de la programación técnica y pensamiento algorítmico que se tratan en <em>Think Python</em>. Y dado que ambos libros comparten un estilo de escritura similar, deberían ser capaces de avanzar rápidamente a través del contenido de <em>Think Python</em> con un esfuerzo mínimo.</p>
<p>  </p>
<p>Como propietario del copyright de <em>Think Python</em>, Allen me ha dado permiso para cambiar la licencia del contenido de su libro que se utiliza en éste, y que originalmente poseía una <em>GNU Free Documentation License</em> a otra más actual, Creative Commons Attribution — Share Alike license. Así se sigue una tendencia general en las licencias de documentación abierta, que están pasando desde la GFDL a la CC-BY-SA (por ejemplo, Wikipedia). El uso de la licencia CC-BY-SA mantiene la arraigada tradición <em>copyleft</em> del libro, a la vez que hacen más sencillo para los autores nuevos la reutilización de ese material a su conveniencia.</p>
<p>Personalmente creo que este libro sirve como ejemplo de por qué los contenidos libres son tan importantes para el futuro de la educación, y quiero agradecer a Allen B. Downey y a la <em>Cambridge University Press</em> por su amplitud de miras a la hora de distribuir el libro bajo un copyright abierto. Espero que se sientan satisfechos con el resultado de mis esfuerzos y deseo que tú como lector también te sientas satisfecho de <em>nuestros</em> esfuerzos colectivos.</p>
<p>Quiero agradecer a Allen B. Downey y Lauren Cowles su ayuda, paciencia y orientación a la hora de tratar y resolver los problemas de copyright referentes a este libro.</p>
<p>Charles Severance<br />
www.dr-chuck.com<br />
Ann Arbor, MI, USA<br />
9 de Septiembre, 2013</p>
<p>Charles Severance es Profesor Clínico Adjunto en la Escuela de Información (<em>School of Information</em>) de la Universidad de Michigan.</p>
<div class="footnotes">
<hr />
<ol>
<li id="fn1"><p>Excepto, por supuesto, en esa línea.<a href="#fnref1">↩</a></p></li>
</ol>
</div>
</body>
</html>
<?php if ( file_exists("../bookfoot.php") ) {
  $HTML_FILE = basename(__FILE__);
  $HTML = ob_get_contents();
  ob_end_clean();
  require_once "../bookfoot.php";
}?>
