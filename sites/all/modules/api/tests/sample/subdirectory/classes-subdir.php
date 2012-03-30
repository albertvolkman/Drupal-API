<?php

/**
 * @file Classes in a subdirectory test.
 */

/**
 * @addtogroup class_samples
 * @{
 */

/**
 * Sample class in a subdirectory.
 */
class SampleInSubDir implements SampleInterface {
  /**
   * A class constant in a subdirectory..
   */
  const constant = 'constant value';

  /**
   * A public property for testing in a subdirectory..
   *
   * @var string A public property in the sub directory
   */
  public $property_in_sub_dir = 'variable value';

  /**
   * A protected property for testing.
   *
   * @var string A protected property in the sub directory
   */
  protected $protected_property_in_sub_dir = 'variable value';

  /**
   * Metasyntatic member function.
   *
   * @throws SampleException when it all goes wrong.
   */
  public function foo() {
    $x = 'hi';
  }

  /**
   * Only implemented in children.
   */
  public function baz() {
  }
}

/**
 * Sample interface in a subdirectory.
 */
interface SampleInSubDirInterface {
  /**
   * Implements this API.
   */
  public function foo2();
}

/**
 * Subclass in a subdirectory, which tests overrides of parent class.
 */
class SubInSubDirSample extends SampleInSubDir implements SampleInterfaceTwo {
  // Not documented.
  public function bar() {
  }

  /**
   * Overrides parent constant.
   */
  const constant = 'different constant value';

  /**
   * Overrides parent property.
   */
  public $property_in_sub_dir = 'other variable value';

  /**
   * Overrides parent function.
   */
  public function foo() {
    // Different function body.
    $y = 'hello';
  }
}

/**
 * Another Sample interface in a subdirectory..
 */
interface SampleInterfaceInSubDir {
  /**
   * A public method.
   */
  public function baz();
}


class Sample2InSubDir implements SampleInSubDirInterface {
  public function baz() {
  }

  /**
   * Implements foo2.
   *
   * @see SampleInSubDirInterface::foo2()
   */
  public function foo2() {

  }
}

/**
 * @} end addtogroup class_samples
 */
