<?php

it('should be a instance of accordion', function () {
    $accordionItems = [
        ['title' => 'Accordion Item #1', 'content' => 'This is the first item\'s accordion body...'],
        ['title' => 'Accordion Item #2', 'content' => 'This is the second item\'s accordion body...'],
    ];
    $view = $this->blade('<x-bootstrap.component.accordion :items="$accordionItems" id="test" label="Test Label" name="test"/>');

    $view->assertSee('Test Label', false)
        ->assertSee('name="test"', false)
        ->assertSee('Accordion Item #1', false)
        ->assertSee("This is the second item's accordion body...", false)
        ->assertSee('id="test"', false);
});
