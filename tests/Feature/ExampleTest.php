<?php

use Eclipse\Core\Models\User;

test('test page opens', function () {
    $response = $this->actingAs(User::factory()->make())->get('module-template/test');

    $response->assertStatus(200);
});
