# Swiper - Carrousel

Link documentação:

```php
<x-plugins.swiper data-navigation="true">
   @for($i=0; $i<3; $i++)
		<x-plugins.swiper-slot>
			<img class="img-cover" src="https://i.pravatar.cc/150?img={{ $i }}" alt="img" title="img"/>
    </x-plugins.swiper-slot>
   @endfor
</x-plugins.swiper>
```

Você pode ajustar qualquer parâmetro através do atributo data, por exemplo alterar quantidade de slides data-slides-per-view.

Na documentação você encontrará a diretiva da seguinte forma: slidesPerView, no atributo data ficará data-slides-per-view=”3”

caso use a diretiva data-direction=”vertical”, é nescessário definir uma altura para o elemento

x-plugins.swiper, para isso use uma classe css e passe através do atributo class
