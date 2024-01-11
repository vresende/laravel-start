# AOS - Animação

Documentação completa:

[https://github.com/michalsnik/aos#animations](https://github.com/michalsnik/aos#animations)

Para animar qualquer elemento HTML basta usar o atributo data-aos=”animacao”

Abaixo veremos alguns exemplos, para exemplo completos, consultar a documentação

```php
<div data-aos="fade-in"></div>

// Vários atributos:

<div
    data-aos="fade-up"
    data-aos-offset="200"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-center"
  >
  </div>
```

Há também uma configuração que pode ser usada apenas por elemento:

- `data-aos-anchor`
    - elemento cujo deslocamento será usado para acionar a animação em vez de uma animação real.

Exemplos:

```php
<div data-aos="fade-up" data-aos-anchor=".other-element"></div>
```

### Animations

- Fade animations:
    - fade
    - fade-up
    - fade-down
    - fade-left
    - fade-right
    - fade-up-right
    - fade-up-left
    - fade-down-right
    - fade-down-left
- Flip animations:
    - flip-up
    - flip-down
    - flip-left
    - flip-right
- Slide animations:
    - slide-up
    - slide-down
    - slide-left
    - slide-right
- Zoom animations:
    - zoom-in
    - zoom-in-up
    - zoom-in-down
    - zoom-in-left
    - zoom-in-right
    - zoom-out
    - zoom-out-up
    - zoom-out-down
    - zoom-out-left
    - zoom-out-right

### Anchor placements:

- top-bottom
- top-center
- top-top
- center-bottom
- center-center
- center-top
- bottom-bottom
- bottom-center
- bottom-top

### Easing functions:

- linear
- ease
- ease-in
- ease-out
- ease-in-out
- ease-in-back
- ease-out-back
- ease-in-out-back
- ease-in-sine
- ease-out-sine
- ease-in-out-sine
- ease-in-quad
- ease-out-quad
- ease-in-out-quad
- ease-in-cubic
- ease-out-cubic
- ease-in-out-cubic
- ease-in-quart
- ease-out-quart
- ease-in-out-quart
