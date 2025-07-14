<?php


/**
 * This file is part of the tuchosft/commonmark-heading-shifter project.
 *
 * @package   TuchSoft/CommonMarkHeadingShifter
 * @author    Mattia Bonzi <mattia@tuchsoft.com>
 * @copyright 2025 TuchSoft (https://tuchsoft.com)
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://tuchsoft.com
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the "Software"), to deal in
 * the Software without restriction, including without limitation the rights to
 * use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies
 * of the Software, and to permit persons to whom the Software is furnished to do
 * so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

 
namespace TuchSoft\CommonMarkHeadingShifter;


use League\CommonMark\Event\DocumentParsedEvent;
use League\CommonMark\Environment\EnvironmentBuilderInterface;
use League\CommonMark\Extension\ConfigurableExtensionInterface;
use League\Config\ConfigurationBuilderInterface;
use Nette\Schema\Expect;


class HeadingShifterExtension implements ConfigurableExtensionInterface
{
    /**
     * @param ConfigurationBuilderInterface $builder
     * @return void
     */
    public function configureSchema(ConfigurationBuilderInterface $builder): void
    {
        $builder->addSchema('heading_shifter', Expect::structure([
            'shift_by' => Expect::int(1),
        ]));
    }

    /**
     * @param EnvironmentBuilderInterface $environment
     * @return void
     */
    public function register(EnvironmentBuilderInterface $environment): void
    {
        $environment->addEventListener(DocumentParsedEvent::class, [
            new HeadingShifter(
                $environment->getConfiguration()->get('heading_shifter.shift_by')
            ), 
            'onDocumentParsed']);
    }
}

