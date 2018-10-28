<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Tests\TestCase;
use Behat\Behat\Tester\Exception\PendingException;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;
use Behat\Behat\Hook\Scope\BeforeScenarioScope;
use Behat\Behat\Hook\Scope\AfterScenarioScope;
use Illuminate\Contracts\Console\Kernel;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends TestCase implements Context
{
    public function __construct()
    {
        putenv('DB_CONNECTION=mysql');
        putenv('DB_DATABASE=:memory:');
        parent::setUp();
    }

    /**
     * @Given the user :arg1 exists
     */
    public function theUserExists($arg1)
    {
        $user = factory(App\User::class)->create([
            'name' => $arg1,
        ]);
    }

    /**
     * @Given I am logged in as :arg1
     */
    public function iAmLoggedInAs($arg1)
    {
        $user = User::where('name', $arg1)->first();
        $this->be($user);
    }

    /**
     * @Given I am at the path :arg1
     */
    public function iAmAtThePath($arg1)
    {
        $response = $this->get($arg1);
        $this->assertEquals(200, $response->getStatusCode());
        $this->content = $response->getContent();
    }

    /**
     * @Then I should see :arg1 at the top of the screen
     */
    public function iShouldSeeAtTheTopOfTheScreen($arg1)
    {
        $this->assertContains($arg1, $this->content);
    }

}
