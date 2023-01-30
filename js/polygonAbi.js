export const ContractAbi = [
    {
        "constant": true,
        "inputs": [
            {
                "name": "_value",
                "type": "uint256"
            }
        ],
        "name": "afterTime",
        "outputs": [
            {
                "name": "",
                "type": "uint256"
            }
        ],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [],
        "name": "name",
        "outputs": [
            {
                "name": "",
                "type": "string"
            }
        ],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [
            {
                "name": "spender",
                "type": "address"
            }, {
                "name": "value",
                "type": "uint256"
            }
        ],
        "name": "approve",
        "outputs": [
            {
                "name": "",
                "type": "bool"
            }
        ],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [],
        "name": "totalSupply",
        "outputs": [
            {
                "name": "",
                "type": "uint256"
            }
        ],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [
            {
                "name": "_from",
                "type": "address"
            }, {
                "name": "_to",
                "type": "address"
            }, {
                "name": "_value",
                "type": "uint256"
            }
        ],
        "name": "transferFrom",
        "outputs": [
            {
                "name": "",
                "type": "bool"
            }
        ],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [],
        "name": "decimals",
        "outputs": [
            {
                "name": "",
                "type": "uint8"
            }
        ],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [],
        "name": "initialSupply",
        "outputs": [
            {
                "name": "",
                "type": "uint256"
            }
        ],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [
            {
                "name": "spender",
                "type": "address"
            }, {
                "name": "addedValue",
                "type": "uint256"
            }
        ],
        "name": "increaseAllowance",
        "outputs": [
            {
                "name": "",
                "type": "bool"
            }
        ],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [],
        "name": "unpause",
        "outputs": [],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [
            {
                "name": "_to",
                "type": "address"
            }, {
                "name": "_amount",
                "type": "uint256"
            }
        ],
        "name": "mint",
        "outputs": [
            {
                "name": "",
                "type": "bool"
            }
        ],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [
            {
                "name": "_target",
                "type": "address"
            }
        ],
        "name": "unfreeze",
        "outputs": [],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [
            {
                "name": "_holder",
                "type": "address"
            }, {
                "name": "_idx",
                "type": "uint256"
            }
        ],
        "name": "lockState",
        "outputs": [
            {
                "name": "",
                "type": "uint256"
            }, {
                "name": "",
                "type": "uint256"
            }
        ],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [],
        "name": "paused",
        "outputs": [
            {
                "name": "",
                "type": "bool"
            }
        ],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [
            {
                "name": "_holder",
                "type": "address"
            }
        ],
        "name": "balanceOf",
        "outputs": [
            {
                "name": "balance",
                "type": "uint256"
            }
        ],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [],
        "name": "renounceOwnership",
        "outputs": [],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [
            {
                "name": "_holder",
                "type": "address"
            }, {
                "name": "i",
                "type": "uint256"
            }
        ],
        "name": "unlock",
        "outputs": [],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [],
        "name": "pause",
        "outputs": [],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [
            {
                "name": "_holder",
                "type": "address"
            }, {
                "name": "_amount",
                "type": "uint256"
            }, {
                "name": "_afterTime",
                "type": "uint256"
            }
        ],
        "name": "lockAfter",
        "outputs": [],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [
            {
                "name": "_target",
                "type": "address"
            }
        ],
        "name": "freeze",
        "outputs": [],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [],
        "name": "owner",
        "outputs": [
            {
                "name": "",
                "type": "address"
            }
        ],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [
            {
                "name": "_to",
                "type": "address"
            }, {
                "name": "_value",
                "type": "uint256"
            }, {
                "name": "_afterTime",
                "type": "uint256"
            }
        ],
        "name": "transferWithLockAfter",
        "outputs": [
            {
                "name": "",
                "type": "bool"
            }
        ],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [],
        "name": "symbol",
        "outputs": [
            {
                "name": "",
                "type": "string"
            }
        ],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [
            {
                "name": "_who",
                "type": "address"
            }, {
                "name": "_value",
                "type": "uint256"
            }
        ],
        "name": "burn",
        "outputs": [],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [
            {
                "name": "spender",
                "type": "address"
            }, {
                "name": "subtractedValue",
                "type": "uint256"
            }
        ],
        "name": "decreaseAllowance",
        "outputs": [
            {
                "name": "",
                "type": "bool"
            }
        ],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [
            {
                "name": "_to",
                "type": "address"
            }, {
                "name": "_value",
                "type": "uint256"
            }
        ],
        "name": "transfer",
        "outputs": [
            {
                "name": "",
                "type": "bool"
            }
        ],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [],
        "name": "currentTime",
        "outputs": [
            {
                "name": "",
                "type": "uint256"
            }
        ],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [
            {
                "name": "owner",
                "type": "address"
            }, {
                "name": "spender",
                "type": "address"
            }
        ],
        "name": "allowance",
        "outputs": [
            {
                "name": "",
                "type": "uint256"
            }
        ],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [
            {
                "name": "_to",
                "type": "address"
            }, {
                "name": "_value",
                "type": "uint256"
            }, {
                "name": "_releaseTime",
                "type": "uint256"
            }
        ],
        "name": "transferWithLock",
        "outputs": [
            {
                "name": "",
                "type": "bool"
            }
        ],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [
            {
                "name": "_holder",
                "type": "address"
            }
        ],
        "name": "lockCount",
        "outputs": [
            {
                "name": "",
                "type": "uint256"
            }
        ],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [
            {
                "name": "_holder",
                "type": "address"
            }, {
                "name": "_amount",
                "type": "uint256"
            }, {
                "name": "_releaseTime",
                "type": "uint256"
            }
        ],
        "name": "lock",
        "outputs": [],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "constant": true,
        "inputs": [
            {
                "name": "_target",
                "type": "address"
            }
        ],
        "name": "isFrozen",
        "outputs": [
            {
                "name": "",
                "type": "bool"
            }
        ],
        "payable": false,
        "stateMutability": "view",
        "type": "function"
    }, {
        "constant": false,
        "inputs": [
            {
                "name": "_newOwner",
                "type": "address"
            }
        ],
        "name": "transferOwnership",
        "outputs": [],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "function"
    }, {
        "inputs": [],
        "payable": false,
        "stateMutability": "nonpayable",
        "type": "constructor"
    }, {
        "anonymous": false,
        "inputs": [
            {
                "indexed": true,
                "name": "previousOwner",
                "type": "address"
            }
        ],
        "name": "OwnershipRenounced",
        "type": "event"
    }, {
        "anonymous": false,
        "inputs": [
            {
                "indexed": true,
                "name": "previousOwner",
                "type": "address"
            }, {
                "indexed": true,
                "name": "newOwner",
                "type": "address"
            }
        ],
        "name": "OwnershipTransferred",
        "type": "event"
    }, {
        "anonymous": false,
        "inputs": [],
        "name": "Pause",
        "type": "event"
    }, {
        "anonymous": false,
        "inputs": [],
        "name": "Unpause",
        "type": "event"
    }, {
        "anonymous": false,
        "inputs": [
            {
                "indexed": false,
                "name": "target",
                "type": "address"
            }
        ],
        "name": "Frozen",
        "type": "event"
    }, {
        "anonymous": false,
        "inputs": [
            {
                "indexed": false,
                "name": "target",
                "type": "address"
            }
        ],
        "name": "Unfrozen",
        "type": "event"
    }, {
        "anonymous": false,
        "inputs": [
            {
                "indexed": true,
                "name": "to",
                "type": "address"
            }, {
                "indexed": false,
                "name": "amount",
                "type": "uint256"
            }
        ],
        "name": "Mint",
        "type": "event"
    }, {
        "anonymous": false,
        "inputs": [
            {
                "indexed": true,
                "name": "burner",
                "type": "address"
            }, {
                "indexed": false,
                "name": "value",
                "type": "uint256"
            }
        ],
        "name": "Burn",
        "type": "event"
    }, {
        "anonymous": false,
        "inputs": [
            {
                "indexed": true,
                "name": "holder",
                "type": "address"
            }, {
                "indexed": false,
                "name": "value",
                "type": "uint256"
            }, {
                "indexed": false,
                "name": "releaseTime",
                "type": "uint256"
            }
        ],
        "name": "Lock",
        "type": "event"
    }, {
        "anonymous": false,
        "inputs": [
            {
                "indexed": true,
                "name": "holder",
                "type": "address"
            }, {
                "indexed": false,
                "name": "value",
                "type": "uint256"
            }
        ],
        "name": "Unlock",
        "type": "event"
    }, {
        "anonymous": false,
        "inputs": [
            {
                "indexed": true,
                "name": "from",
                "type": "address"
            }, {
                "indexed": true,
                "name": "to",
                "type": "address"
            }, {
                "indexed": false,
                "name": "value",
                "type": "uint256"
            }
        ],
        "name": "Transfer",
        "type": "event"
    }, {
        "anonymous": false,
        "inputs": [
            {
                "indexed": true,
                "name": "owner",
                "type": "address"
            }, {
                "indexed": true,
                "name": "spender",
                "type": "address"
            }, {
                "indexed": false,
                "name": "value",
                "type": "uint256"
            }
        ],
        "name": "Approval",
        "type": "event"
    }
]