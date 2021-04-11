<?php

declare(strict_types=1);

namespace Heimseiten\ContaoGoogleFontsOpenSansBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class HeimseitenContaoGoogleFontsOpenSansBundle extends Bundle
{
	/**
	 * {@inheritdoc}
	 */
	public function build(ContainerBuilder $container): void
	{
		parent::build($container);
		
	}
}
