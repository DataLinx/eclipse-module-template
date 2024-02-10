<?php

use Eclipse\Core\Models\User;
use Eclipse\ModuleTemplate\Livewire\MyCounter;
use Livewire\Livewire;

beforeEach(function () {
    $this->authedUser = User::factory()->make();
});

test('component is seen on page', function () {
    $this->actingAs($this->authedUser)
        ->get('module-template/test')
        ->assertSeeLivewire(MyCounter::class);
});

test('counter can be increased and decreased', function () {
    Livewire::test(MyCounter::class)
        ->assertSet('count', 1)
        ->call('increment')
        ->assertSet('count', 2)
        ->call('decrement')
        ->assertSet('count', 1);
});
