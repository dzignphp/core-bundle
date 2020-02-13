<?php

namespace Dzign\Core\Security\Guard;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;

class AdminAuthentificator extends AbstractGuardAuthenticator
{
    /**
     * @var UrlGeneratorInterface
     */
    private $urlGenerator;

    /**
     * @param UrlGeneratorInterface $urlGenerator
     */
    public function __construct(
        UrlGeneratorInterface $urlGenerator
    ) {
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(Request $request)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function getCredentials(Request $request)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function getUser($credentials, UserProviderInterface $userProvider)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function checkCredentials($credentials, UserInterface $user)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function createAuthenticatedToken(UserInterface $user, string $providerKey)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $providerKey)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function supportsRememberMe()
    {

    }
}
