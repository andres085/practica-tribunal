<h1 id="practica-tribunal">API Documentos Practica Tribunal</h1>
<p>Bienvenidos a la API de gestión de documentos para la Practica del Tribunal de Cuentas</p>
<p>En esta API se pueden ver, guardar, actualizar y borrar los documentos del Tribunal. Para ello se provee de las URI necesarias para poder realizar
dichas acciones.
</p>
<h2 id="instalación"><strong>Instalación:</strong></h2>
<p>1- Clonar el proyecto desde el repositorio con el comando.</p>
<pre><code>#HTTPS
git clone https://github.com/andres085/practica-tribunal.git
</code></pre>
<pre><code>#SSH
git@github.com:andres085/practica-tribunal.git</code></pre>
<p>2- Ir a la carpeta del proyecto con el comando.</p>
<pre><code>cd practica-tribunal
</code></pre>
<p>3- En la carpeta del proyecto ejecutar el siguiente comando.</p>
<pre><code>cp .env.example .env
</code></pre>
<p>4- Colocar las siguientes variables de entorno</p>
<p>DB_CONNECTION=mysql</p>
<p>DB_HOST=mysql o ip de mysql en el contenedor</p>
<p>DB_PORT=3306</p>
<p>DB_DATABASE=practica_tribunal</p>
<p>DB_USERNAME=root</p>
<p>DB_PASSWORD=root</p>
</p>
<p>5- Clonar laradock para levantar el entorno dockerizado</p>
<pre><code>git clone https://github.com/Laradock/laradock.git
</code></pre>
<p>6- Ingresar a la carpeta laradock</p>
<pre><code>cd laradock
</code></pre>
<p>6- Levantar Docker con Nginx y MySQL</p>
<pre><code>docker-compose up -d nginx mysql
</code></pre>
<p><strong>Para migrar los datos base de la API y la base de datos</strong></p>
<p>1- Volver a la carpeta practica-tribunal.</p>
<pre><code>cd ..
</code></pre>
<p>2- Una vez en la carpeta ejecutar el comando.</p>
<pre><code>composer update
</code></pre>
<p>3- Ejecutar el siguiente comando para realizar las migraciones y los datos dummy a la DB.</p>
<pre><code>php artisan migrate:fresh --seed
</code></pre>
<p><strong>Para utilizar la API se disponen de las siguientes URI</strong></p>
<p>Expedientes y sus Documentos. <pre><code>/api/expediente</code></pre></p>
<p>Areas y sus Documentos. <pre><code>/api/area</code></pre></p>
<p>Organismos y sus Documentos. <pre><code>/api/organismo</code></pre></p>
<p>Documentos y sus Observaciones. <pre><code>/api/documento</code></pre></p>
<p>Tipos de Documentos. <pre><code>/api/documento-tipo</code></pre></p>
<p>Observaciones de Documentos. <pre><code>/api/documento-observacion</code></pre></p>
<p><strong>Para mas información remitirse a la documentación sobre la API</strong></p>
<a href="https://drive.google.com/file/d/1fCU3P795T58HPRvfszjA1cZRQJwGV6tx/view?usp=sharing">Documentación</a>


