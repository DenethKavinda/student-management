    @include('component.header')
    @include('component.nav')

    <main class="page-shell">
        <section id="hero" class="container py-5">
            <div class="hero-card">
                <p class="eyebrow mb-2">Welcome back</p>
                <h1 class="display-5 fw-bold mb-3">Student management made clean and simple.</h1>
                <p class="lead mb-0">Use the navigation to move between students, classes, and reports.</p>
            </div>
        </section>
    </main>

    @include('component.footer')

    @include('component.script')