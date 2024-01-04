<?php

it('should be a instance of accordion', function () {

    $view = $this->blade('<x-bootstrap.component.accordion :items="$accordionItems" id="test" label="Test Label" name="test"/>', [
        'accordionItems' => [
            [
                'title' => 'Accordion Item #1',
                'content' => 'This is the first item\'s accordion body. It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.',
            ],
            [
                'title' => 'Accordion Item #2',
                'content' => 'This is the second item\'s accordion body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.',
            ],
        ],
    ]);

    $view->assertSee('Accordion Item #1', false)
        ->assertSee("Accordion Item #2", false)
        ->assertSee('class="accordion"', false)
        ->assertSee('class="accordion-body"', false);
});
