<?php

namespace Bindeo\DataModel;

class Exceptions
{
    // Authorizations
    const UNAUTHORIZED = 'Unauthorized access'; // 401

    // Database
    const MISSING_FIELDS     = 'Missing fields'; // 400
    const INCORRECT_PASSWORD = 'Incorrect password'; // 403
    const EXPIRED_TOKEN      = 'Expired token'; // 403
    const DUPLICATED_KEY     = 'Duplicated key'; // 409
    const NON_EXISTENT       = 'Element does not exist'; // 409

    // Blockchain
    const ALREADY_SIGNED         = 'Already signed'; // 409
    const NO_COINS               = 'No blockchain coins'; // 503
    const UNRECHEABLE_BLOCKCHAIN = 'Unrecheable Blockchain net'; // 503

    // Storage
    const FULL_SPACE      = 'Storage space full'; // 403
    const DUPLICATED_FILE = 'File already uploaded by the user'; // 409
    const CANNOT_MOVE     = 'Cannot move file'; // 503
}