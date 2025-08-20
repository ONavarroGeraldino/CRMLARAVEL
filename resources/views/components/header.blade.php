<header>
<div class="hamburger">☰</div>
<aside class="sidebar">
  <div class="sidebar-header">
    <img src="{{ asset('imagenes/logo.png') }}" alt="Dashboard Icon">
    <span class="title">DASHBOARD</span>
  </div>

  <nav>
    <a href="#"><span class="icon">🏠</span><span class="label">Inicio</span></a>
    <a href="{{ route('usuarios') }}"><span class="icon">👥</span><span class="label">Usuarios</span></a>
    <a href="{{ route('reporte') }}"><span class="icon">📊</span><span class="label">Reportes</span></a>

    <!-- Submenú Configuración -->
    <div class="configuracion-menu">
      <a href="#" class="config-toggle"><span class="icon">⚙️</span><span class="label">Configuración</span></a>
      <div class="submenu">
        <a href="{{ route('configuracion.perfil') }}"><span class="icon">📝</span>Mi Perfil</a>
        <a href="{{ route('configuracion.password') }}"><span class="icon">🔑</span>Cambiar Contraseña</a>
        <a href="{{ route('configuracion.preferencias') }}"><span class="icon">🎨</span>Preferencias</a>
        <a href="{{ route('configuracion.seguridad') }}"><span class="icon">🛡️</span>Seguridad</a>
        <a href="{{ route('configuracion.administracion') }}"><span class="icon">⚖️</span>Administración</a>
        <a href="{{ route('configuracion.soporte') }}"><span class="icon">❓</span>Soporte / Ayuda</a>
      </div>
    </div>

    <!-- Cerrar sesión -->
    <form method="POST" action="{{ route('logout') }}" style="margin:0;">
      @csrf
      <button type="submit" class="sidebar-link">
        <span class="icon">🚪</span><span class="label">Cerrar sesión</span>
      </button>
    </form>
  </nav>
</aside>


  <script src="{{ asset('js/scriptconfig.js') }}"></script>
</header>
