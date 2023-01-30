import { env } from "/js/env.js";
import { ContractAbi } from "/js/polygonAbi.js";

let web3 = new Web3("https://rpc.ankr.com/polygon");

let contract = new web3.eth.Contract(ContractAbi, env.polygonContractAdress);

const walletCreate = async () => {

    const account = web3.eth.accounts.create();
    const publicKey = account.address;
    const privateKey = account.privateKey;

    const wallet = {
        "publicKey": publicKey,
        "privateKey": privateKey
    };
    const Array = [publicKey,privateKey]

    ///console.log(publicKey, privateKey);

    return Array;
};


const getBalance = async (address) => {
    let balance;
    balance = await contract.methods.balanceOf(address).call().then(result => {
        console.log(result);
        return result;
    })
    .catch(error => {
            console.log(error);
    });

    balance = web3.utils.fromWei(balance, 'ether');

    return balance;
};

const transfer = async (toaddress,privatekey,count) => {
    
    let account = await web3.eth.accounts.wallet.add(privatekey);

    const callObj = contract.methods.transfer(toaddress, web3.utils.toWei(count));

    const option = {
        from: account.address,
    };

   // console.log("polygon balance", await web3.eth.getBalance(account.address));

    const gas = await estimateGas(callObj, option);
    console.log(gas)

    contract.methods.transfer(toaddress, web3.utils.toWei('0.2'))
        .send({ from: account.address, gas: gas })
        .then(result => {
            console.log(result);
            return true;
        })
        .catch(error => {
            console.log(error);
            return false;
        })

};

async function estimateGas(callObj, option) {

    let gas;

    await callObj.estimateGas(option)
        .then(function (gasAmount) {
            gas = gasAmount;
        })
        .catch(function (error) {
            console.log(error)
            alert("There is not enough balance in your wallet.");
            //location.reload();
        })
    return gas;
}

export {
    walletCreate,
    getBalance,
    transfer
};