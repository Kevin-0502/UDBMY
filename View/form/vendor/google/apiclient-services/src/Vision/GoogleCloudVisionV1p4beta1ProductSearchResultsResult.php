<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Vision;

class GoogleCloudVisionV1p4beta1ProductSearchResultsResult extends \Google\Model
{
  /**
   * @var string
   */
  public $image;
  protected $productType = GoogleCloudVisionV1p4beta1Product::class;
  protected $productDataType = '';
  /**
   * @var float
   */
  public $score;

  /**
   * @param string
   */
  public function setImage($image)
  {
    $this->image = $image;
  }
  /**
   * @return string
   */
  public function getImage()
  {
    return $this->image;
  }
  /**
   * @param GoogleCloudVisionV1p4beta1Product
   */
  public function setProduct(GoogleCloudVisionV1p4beta1Product $product)
  {
    $this->product = $product;
  }
  /**
   * @return GoogleCloudVisionV1p4beta1Product
   */
  public function getProduct()
  {
    return $this->product;
  }
  /**
   * @param float
   */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /**
   * @return float
   */
  public function getScore()
  {
    return $this->score;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudVisionV1p4beta1ProductSearchResultsResult::class, 'Google_Service_Vision_GoogleCloudVisionV1p4beta1ProductSearchResultsResult');
