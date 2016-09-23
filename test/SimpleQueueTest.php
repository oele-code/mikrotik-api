<?php
use MikrotikAPI\Talker\Talker;
use MikrotikAPI\Commands\Queue\Simple;
use MikrotikAPI\Commands\IP\Address;
use PHPUnit\Framework\TestCase;

/**
* 
*/
class AddressTest extends TestCase
{
	public function testGetAllIp()
	{	
		//load enviroment variables
		$dotenv = new Dotenv\Dotenv(__DIR__);
		$dotenv->load();

		//create conection
		$talker = Talker::create( $_ENV['MKT_IP'], $_ENV['MKT_USER'], $_ENV['MKT_PASS']);		
	    $talker->initialize();
		
		if( $talker->isConnected() ){
		 	print_r( "\n"."connected");
		}
		
		// foreach ($listQueues as $queue) {
		// 	print_r( "\n".$queue['name'] .':'. $queue['target'] );
		// }
		
	}
	
}