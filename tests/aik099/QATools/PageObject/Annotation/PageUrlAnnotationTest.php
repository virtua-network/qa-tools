<?php
/**
 * This file is part of the qa-tools library.
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @copyright Alexander Obuhovich <aik.bold@gmail.com>
 * @link      https://github.com/aik099/qa-tools
 */

namespace tests\aik099\QATools\PageObject\Annotation;


use aik099\QATools\PageObject\Annotation\PageUrlAnnotation;

class PageUrlAnnotationTest extends \PHPUnit_Framework_TestCase
{

	/**
	 * @dataProvider initAnnotationDataProvider
	 */
	public function testInitAnnotation(array $annotation_params, $expected_url, array $expected_params)
	{
		$annotation = new PageUrlAnnotation();
		$annotation->initAnnotation($annotation_params);

		$this->assertEquals($expected_url, $annotation->url);
		$this->assertEquals($expected_params, $annotation->params);
	}

	public function initAnnotationDataProvider()
	{
		return array(
			array(array('/test'), '/test', array()),
			array(array('/test', array('param' => 'value')), '/test', array('param' => 'value')),
			array(array('url' => '/test'), '/test', array()),
			array(array('url' => '/test', 'params' => array('param' => 'value')), '/test', array('param' => 'value')),
		);
	}

}
