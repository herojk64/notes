@extends("layout.layout")

@section("content")
    <main>
        <article id="carousel" class="carousel slide" style="height:80svh;max-height:700px;">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner h-40">
                <div class="carousel-item active">
                    <img src="https://plus.unsplash.com/premium_photo-1685134731588-783ca7471b65?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                         class="d-block w-100 ratio-16x9" alt="..." style="height:80svh;max-height:700px;object-fit: cover">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>A to-do note application</h5>
                        <p>Simple note application that organizes your notes for you.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1527345931282-806d3b11967f?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                         class="d-block w-100 ratio-16x9" alt="..." style="height:80svh;max-height:700px; object-fit: cover">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1517817748493-49ec54a32465?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                         class="d-block w-100 ratio-16x9" alt="..." style="height:80svh;max-height:700px;object-fit: cover">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </article>

    </main>
@endsection
