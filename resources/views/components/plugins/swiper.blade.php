<div {{ $attributes->merge(['class' => 'swiper']) }} >
    <div class="swiper-wrapper">
        {{ $slot }}
    </div>
    <!-- Adicione controles de navegação se necessário -->
    <div class="swiper-pagination d-none"></div>
    <div class="swiper-button-prev d-none"></div>
    <div class="swiper-button-next d-none"></div>
</div>
@push('scripts')
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            var swipers = document.querySelectorAll('.swiper');
            swipers.forEach(function (swiperElement) {
                var config = {
                    loop: true
                };
                var attrs = swiperElement.attributes;
                for (var i = 0; i < attrs.length; i++) {
                    if (!attrs[i].name.startsWith('data-')) continue;

                    var option = attrs[i].name.substring(5).replace(/-./g, function (x) {
                        return x[1].toUpperCase();
                    });

                    if (option === 'navigation' && attrs[i].value === 'true') {
                        config[option] = {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        };
                        swiperElement.querySelector('.swiper-button-next').classList.remove('d-none')
                        swiperElement.querySelector('.swiper-button-prev').classList.remove('d-none')
                        continue;
                    }
                    if (option === 'pagination' && attrs[i].value === 'true') {
                        config[option] = {
                            el: ".swiper-pagination",
                            clickable: true,
                        };
                        swiperElement.querySelector('.swiper-pagination').classList.remove('d-none')
                        continue;
                    }

                    try {
                        config[option] = JSON.parse(attrs[i].value);
                    } catch (e) {
                        config[option] = attrs[i].value;
                    }
                }
                console.log(config);
                console.log(swiperElement);
                new Swiper(swiperElement, config);
            });

        });

    </script>
@endpush

